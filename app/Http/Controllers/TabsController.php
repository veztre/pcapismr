<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabsController extends Controller
{
    //


    public function moduleOne()
    {
        return view('/module.moduleOne');
    }
    public function moduleTwo()
    {
        return view('/module.moduleTwo');
    }

    public function moduleThree()
    {
        return view('/module.moduleThree');
    }
    public function moduleFour()
    {
        return view('/module.moduleFour');
    }
    public function moduleFive()
    {
        return view('/module.moduleFive');
    }
    public function moduleSix()
    {
        return view('/module.moduleSix');
    }


}
