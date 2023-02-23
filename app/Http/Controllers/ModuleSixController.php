<?php

namespace App\Http\Controllers;

use App\Models\AccidentRecord;
use App\Models\PersonelStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ModuleSixController extends Controller
{
    public function index(){
            $accident_records = AccidentRecord::all();
            $personel_staff = PersonelStaff::all();


        return view('module.moduleSix');
        -with (['accident_records'=>$accident_records,'personel_staff'=>$personel_staff]);
    }

    public function save(Request $request){

        $accident_records = $request->input('accident_records');
        for ($x=0; $x<count($accident_records); $x+=5 ){
            $DBaccident_records = new AccidentRecord();
            $DBaccident_records->date = $accident_records[$x];
            $DBaccident_records->Area_Location = $accident_records[$x+1];
            $DBaccident_records->Findings_and_Obeservations = $accident_records[$x+2];
            $DBaccident_records->Action_Taken = $accident_records[$x+3];
            $DBaccident_records->Remarks = $accident_records[$x+4];

            $DBaccident_records->save();

        }
        $personel_staff = $request->input('personel_staff');
        for ($x=0; $x<count($personel_staff); $x+=3 ){
            $DBpersonel_staff = new PersonelStaff();
            $DBpersonel_staff->date = $personel_staff[$x];
            $DBpersonel_staff->Course_Training_Description = $personel_staff[$x+1];
            $DBpersonel_staff->no_of_Personnel_Trained = $personel_staff[$x+2];

            $DBpersonel_staff->save();

        }
        return view('moduleSix');
    }

    public function delete(){


    DB::table('accident_records')->delete();
    DB::table('personel_staff')->delete();

    return view('module.moduleSix');

}

public function pdf(){

    $accident_records = AccidentRecord::get(); //get database
    $pdf = PDF::loadView('module.pdf6',[
            'accident_records'=>$accident_records ]);  //hello.blade.php (design of pdf)
    return $pdf->download('moduleSix.pdf'); //pdf name download

}

}
