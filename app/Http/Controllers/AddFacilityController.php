<?php

namespace App\Http\Controllers;

use App\Models\Addfacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AddFacilityController extends Controller
{
    public function index()
    {

        return view('module.addfacilitymod');

    }

    public function store(Request $request)
    {
        $data = new Addfacility();
        $data->userid = Auth::user()->id;
        $data->embregion = $request->input('embregion');
        $data->embid = $request->input('embid');
        $data->establishment = $request->input('establishment');
        $data->street = $request->input('street');
        $data->baranggay = $request->input('baranggay');
        $data->city = $request->input('city');
        $data->province = $request->input('province');

        $data->save();

        return redirect('/trainee/dashboard');
    }
}
