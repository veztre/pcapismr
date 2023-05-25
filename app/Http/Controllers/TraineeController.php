<?php

namespace App\Http\Controllers;

use App\Models\Addfacility;
use App\Models\Plant;
use App\Models\Oaupload;
use Illuminate\Http\Request;
use App\Models\Referencen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TraineeController extends Controller
{
    public function index(){

        $referencens= Auth::user()->reference_no()->get();
        $plant = Auth::user()->plant()->get();
        $users = Auth::user()->id;
        $addfacility = Auth::user()->addfacility()->get();

        $oaupload = Oaupload::get();
        return view('dashboard', compact('referencens', 'users', 'addfacility', 'plant', 'oaupload'));
    }

}
