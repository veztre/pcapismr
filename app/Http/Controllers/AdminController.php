<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Addfacility;
use App\Models\Oaupload;
use App\Models\Plant;
use App\Models\Referencen;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Concerns\ValidatesAttributes;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{
    use PasswordValidationRules;
    use ValidatesAttributes;


    public function index()
    {
        $users = User::all();
        $referencens = Referencen::all();
        $addfacility = Addfacility::all();
        $plant = Plant::all();
        $oaupload = Oaupload::all();
        $userTypes = ['admin', 'trainee'];

        $currentUserId = auth()->user()->id;
        
        $uploadedFilePath = Session::pull('uploadedFilePath');
        $trainee = User::with('facility')->findOrFail($currentUserId);
        // Retrieve the trainee's facility
        $facility = $trainee->facility ? $trainee->facility->establishment : 'No facility found';
        // Retrieve the trainee's uploaded file
        $upload = Oaupload::where('userid', $currentUserId)->first();
        $fileName = $upload ? $upload->file : '';

        // Build the user folder path
        $userFolder = $currentUserId . '/moduleSixAttachment';

        // Build the file path
        $filePath = $userFolder . '/' . $fileName;

        // Generate the download URL
        $downloadUrl = $fileName ? asset($filePath) : null;

        return view('dashboard', compact(
            'users',
            'referencens',
            'addfacility',
            'plant',
            'oaupload',
            'userTypes',
            'currentUserId',
            'uploadedFilePath',
            'trainee',
            'facility',
            'downloadUrl'
        ))->with('usertype', $userTypes);
    }



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        return view('module.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'company' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string'],
            'usertype' => ['required', 'string'],
            'password' => $this->passwordRules(),
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = new User();
        $data->username = $request->input('username');
        $data->firstname = $request->input('firstname');
        $data->lastname = $request->input('lastname');
        $data->company = $request->input('company');
        $data->contact = $request->input('contact');
        $data->email = $request->input('email');
        $data->usertype = $request->input('usertype');
        $data->region = $request->input('region');
        $data->password = Hash::make($request->input('password'));
        $data->save();

        // File upload code...
        if ($file = $request->file('file')) {
            $name = $file->getClientOriginalName();
            $userId = $data->id;
            $reference = $data->reference_no()->first();
            $refNo = $reference->reference_number;

            // Build the user folder path
            $userFolder = $userId . '/' . $refNo . '/moduleSixAttachment';

            // Build the file path
            $filePath = $userFolder . '/' . $name;

            if ($file->move($userFolder, $name)) {
                $upload = new Oaupload();
                $upload->file = $name;
                $upload->userid = $userId;
                $upload->save();

                // Store the file path in a session variable
                Session::put('uploadedFilePath', $filePath);
            }
        }

        return redirect('/admin/dashboard');
    }




    public function edit( $id)
    {


        $users = User::findOrFail($id);
        $regions = Region::all();
        $userTypes = ['admin', 'trainee'];

        return view('module.editaccount', compact('users','regions', 'userTypes'));

    }



    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($id)],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'company' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string'],
            'usertype' => ['required', 'string'],
            'password' => $this->passwordRules(),
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $users = User::find($id);
        $users->username = $request->input('username');
        $users->firstname = $request->input('firstname');
        $users->lastname = $request->input('lastname');
        $users->company = $request->input('company');
        $users->contact = $request->input('contact');
        $users->email = $request->input('email');
        $users->usertype = $request->input('usertype');
        $users->region = $request->input('region');
        $users->update();

        return redirect('/admin/dashboard');
    }

    public function updateUsertype(Request $request)
    {
        $user = User::findOrFail($request->input('user_id'));

        $user->usertype = $request->input('usertype');

        $user->save();

        return redirect()->back()->with('success', 'Usertype updated successfully.');
    }





    public function deleteTraineeAccounts(Request $request)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            // Redirect to login page
            return redirect()->route('login')->with('error', 'Unauthorized action. Please login again.');
        }

        // Retrieve the current user
        $admin = auth()->user();

        if ($admin->isAdmin()) {
            // Store admin user's ID
            $adminId = $admin->id;

            // Display a confirmation prompt
            if (!$request->has('_confirmed')) {
                return redirect()->back()->with('_confirm', true);
            }

            // User confirmed the action, proceed with deletion
            if ($request->input('_confirmed') === 'yes') {
                // Get the IDs of all trainee accounts
                $traineeIds = DB::table('users')->where('usertype', 'trainee')->pluck('id')->toArray();

                // Remove the current admin user ID from the trainee IDs array
                $traineeIds = array_diff($traineeIds, [$adminId]);

                // Delete trainee accounts
                DB::table('users')->whereIn('id', $traineeIds)->delete();

                // Flash success message
                Session::flash('success', 'Trainee accounts deleted successfully.');

                // Run the migrate:fresh command without dropping users table
                \Artisan::call('migrate:fresh', [
                    '--path' => 'database/migrations',
                    '--force' => true,
                ]);

                // Run the database seeder
                \Artisan::call('db:seed');

                // Authenticate the admin user by ID
                Auth::loginUsingId($adminId);
            } else {
                // User canceled the action, display a cancellation message
                Session::flash('error', 'Deletion of trainee accounts was canceled.');
            }
        } else {
            // Redirect to login page
            return redirect()->route('login')->with('error', 'Unauthorized action. Please login again.');
        }

        // Redirect back to the previous page
        return redirect()->back();
    }

    public function downloadFile($id)
    {
        $upload = Oaupload::find($id);

        if ($upload) {
            $filePath = $upload->file;
            $file = Storage::disk('local')->path($filePath);

            if (file_exists($file)) {
                return response()->download($file);
            }
        }

        return redirect()->back()->with('error', 'File not found.');
    }
}
