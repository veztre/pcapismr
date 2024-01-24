<?php

namespace App\Http\Controllers;

use App\Models\Addfacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AddFacilityController extends Controller
{
    public function index()
    {

        return view('module.addfacility');

    }

    public function store(Request $request)
    {
        $facility = new Addfacility();

        $facility->userid = Auth::user()->id;
        $facility->embregion = Auth::user()->region;
        
        $facility->embid = $request->input('embid');
        $facility->establishment = $request->input('establishment');
        $facility->street = $request->input('street');
        $facility->baranggay = $request->input('baranggay');
        $facility->city = $request->input('city');
        $facility->province = $request->input('province');

        $facility->save();

        return redirect('/trainee/dashboard');
    }
}
