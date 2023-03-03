<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {


        $users = User::all();
        return view('dashboard', compact('users'));

        $usertype = 'admin';
        return view('navigation-menu', compact('usertype'));


    }
    public function create(){


    }

    public function store(Request $request){

    }


}
