<?php

namespace App\Http\Controllers;

use App\Models\Addfacility;
use App\Models\Plant;
use App\Models\Oaupload;
use Illuminate\Http\Request;
use App\Models\Referencen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TraineeController extends Controller
{
    public function index()
    {
        $referencens = Auth::user()->reference_no()->get();
        $plant = Auth::user()->plant()->get();
        $users = Auth::user()->id;
        $addfacility = Auth::user()->addfacility()->get();
        $oaupload = Oaupload::get();
       
        $currentUserId = auth()->user()->id;
        $uploadedFilePath = Session::pull('uploadedFilePath');
        $upload = Oaupload::where('userid', $currentUserId)->first();

        return view('dashboard', compact('referencens', 'users', 'addfacility', 'plant', 'oaupload',
            'currentUserId',
            'uploadedFilePath',
            'upload',));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        // File upload code...

        if ($file = $request->file('file')) {
            $name = $file->getClientOriginalName();
            $userId = Auth::user()->id;
            $reference = Auth::user()->reference_no()->first();
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

        // Handle the rest of your code...
    }

}
