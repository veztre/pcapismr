<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransitiontoMod2;
use Illuminate\Support\Facades\Auth;

class TransitiontoMod2Controller extends Controller
{
    public function index()
    {
        return view('module.transitiontoModTwo');
    }

    public  function  check(Request $request){

        $data = new TransitiontoMod2();
        $data->userid = Auth::user()->id;
        $data->eidm = $request->input('eidm');
        $data->ehwt = $request->input('ehwt');
        $data->save();

        $eidm = $request->input('eidm');
        $ehwt = $request->input('ehwt');

        if ($eidm == 'Yes' && $ehwt == 'Yes' ) {
            return redirect()->back()->with('message', 'Module 2A and 2C is Under Construction.');
        } elseif ($eidm == 'Yes') {
            return redirect()->back()->with('message', 'Module 2A is Under Construction.');
        }elseif ($ehwt == 'Yes') {
            return redirect()->back()->with('message', 'Module 2C is Under Construction.');
        } else {

                return redirect('moduleTwo');
            }


    }

  
}
