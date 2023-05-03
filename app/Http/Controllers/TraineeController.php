<?php

namespace App\Http\Controllers;

use App\Models\Oaupload;
use App\Models\Plant;
use Illuminate\Http\Request;
use App\Models\referencen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Addfacility;

class TraineeController extends Controller
{
    public function index(){

        $referencens = Referencen::get();
        $users = Auth::user()->id;
        $addfacility = Addfacility::get();
        $plant = Plant::get();
        $oaupload = Oaupload::get();
        return view('dashboard', compact('referencens', 'users', 'addfacility', 'plant', 'oaupload'));
    }

}
