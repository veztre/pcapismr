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

        return view('module.create');
    }

    public function store(Request $request){



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

    public function edit()
    {
        $users = User::all();


        return view('module.edit',compact('users'));
    }

}
