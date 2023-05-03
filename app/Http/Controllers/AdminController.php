<?php

namespace App\Http\Controllers;


use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Addfacility;
use App\Models\Oaupload;
use App\Models\Plant;
use App\Models\referencen;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Concerns\ValidatesAttributes;
use Laravel\Jetstream\Jetstream;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
   use PasswordValidationRules;
   use ValidatesAttributes;
    public function index()
    {
        $referencens = referencen::all();
        $users = User::all();
        $addfacility = Addfacility::get();
        $plant = Plant::get();
        $oaupload = Oaupload::get();
        $userTypes = ['admin', 'trainee'];
        return view('dashboard', compact('users', 'referencens', 'addfacility', 'plant', 'oaupload', 'userTypes'));

        $usertype = ['admin', 'trainee'];
        return view('navigation-menu', compact('usertype'));


    }
    public function create(){

        return view('module.create');
    }

    public function store(Request $request){

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


}
