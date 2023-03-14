<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\referencen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TraineeController extends Controller
{
    public function index(){

        $referencens = Referencen::get();
        $users = Auth::user()->id;
        return view('dashboard', compact('referencens', 'users'));
    }

}
