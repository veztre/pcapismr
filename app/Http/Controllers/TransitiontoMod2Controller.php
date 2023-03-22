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

        if ($eidm == 'Yes' || $ehwt == 'Yes') {
            return redirect()->back()->with('message', 'Module 2A is Under Construction.');
        } else {
            return redirect('moduleTwo');
        }

    }

    // public function checkQuestions(Request $request)
    //{
    //  $answer1 = $request->input('eidm');
    //    $answer2 = $request->input('ehwt');

    //   if ($answer1 == 'Yes' || $answer2 == 'Yes') {
    //       return "Module 2A is under construction";
    //   } else {
    // continue with normal flow
    //   }
    // }
}
