<?php

namespace App\Http\Controllers;

use App\Models\Addfacility;
use App\Models\Plant;
use App\Models\Oaupload;
use Illuminate\Http\Request;
use App\Models\referencen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TraineeController extends Controller
{
    public function index(){

        $referencens= Auth::user()->reference_no()->get();
        $users = Auth::user()->id;
        $addfacility = Auth::user()->addfacility()->get();
        $plant = Plant::get();
        $oaupload = Oaupload::get();
        return view('dashboard', compact('referencens', 'users', 'addfacility', 'plant', 'oaupload'));
    }

}
