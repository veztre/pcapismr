<?php

namespace App\Http\Controllers;


use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Concerns\ValidatesAttributes;
use Laravel\Jetstream\Jetstream;


class AdminController extends Controller
{
   use PasswordValidationRules;
   use ValidatesAttributes;
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

    public function edit($id)
    {
        $users = User::find($id);
        return view('module.editaccount', compact('users'));
    }


    public function update(Request $request, $id){
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

}
