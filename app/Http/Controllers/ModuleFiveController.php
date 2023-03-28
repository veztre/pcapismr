<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\AAQmonitoring;
use App\Models\AQC;
use App\Models\AQG;
use App\Models\Awqmonitoring;
use App\Models\Awqmonitoring1;
use App\Models\Description;
use App\Models\EICC;
use App\Models\EVMPprogram;
use App\Models\OECondition;
use App\Models\referencen;
use App\Models\TQC;
use App\Models\TQG;
use App\Models\AAQmonitoring_parameter;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class ModuleFiveController extends Controller
{
    public function index(){
        $aaqmonitoring_parameter = Auth::user()->aaqmonitoring_parameter();
        $aaqmonitoring = Auth::user()->aaqmonitoring();
        $oecondition = Auth::user()->oecondition();
        $evmpprogram = Auth::user()->evmpprogram();
        $aqg = Auth::user()->aqg();
        $tqg = Auth::user()->tqg();
        $aqc = Auth::user()->aqc();
        $tqc = Auth::user()->tqc();
        $eicc = Auth::user()->eicc();
        $description = Auth::user()->description();
        $awqmonitoring = Auth::user()->awqmonitoring();
        $awqmonitoring1 = Auth::user()->awqmonitoring1();
        $reference= Auth::user()->reference_no()->first();

        return view('module.moduleFive')
            ->with([
                'aaqmonitoring'=>$aaqmonitoring,
                'aaqmonitoring_parameter'=>$aaqmonitoring_parameter,
                'oecondition'=>$oecondition,
                'evmpprogram'=>$evmpprogram,
                'aqg'=>$aqg,
                'tqg'=>$tqg,
                'aqc'=>$aqc,
                'tqc'=>$tqc,
                'eicc'=>$eicc,
                'description'=>$description,
                'awqmonitoring'=>$awqmonitoring,
                'awqmonitoring1'=>$awqmonitoring1,
                'referencen'=>$reference->ref_no
            ]);

    }

    public function save(Request $request){

        $aaqmonitoring_parameter = new AAQmonitoring_parameter();
        $aaqmonitoring_parameter->userid = Auth::user()->id;
        $aaqmonitoring_parameter->aaqname_parameter1 = $request->input('aaqname_parameter1');
        $aaqmonitoring_parameter->aaqname_parameter2 = $request->input('aaqname_parameter2');
        $aaqmonitoring_parameter->aaqname_parameter3 = $request->input('aaqname_parameter3');
        $aaqmonitoring_parameter->save();

        $aaqmonitoring = $request->input('aaqmonitoring');
        for ($x=0; $x<count($aaqmonitoring); $x+=9 ){
            $DBaaqmonitoring = new AAQmonitoring();
            $DBaaqmonitoring->userid = Auth::user()->id;
            $DBaaqmonitoring->station_description = $aaqmonitoring[$x];
            $DBaaqmonitoring->date = date('Y-m-d', strtotime($aaqmonitoring[$x+1]));
            $DBaaqmonitoring->noise_level_db = $aaqmonitoring[$x+2];
            $DBaaqmonitoring->CO_mg_ncm = $aaqmonitoring[$x+3];
            $DBaaqmonitoring->NOx_mg_ncm = $aaqmonitoring[$x+4];
            $DBaaqmonitoring->particulates_mg_ncm = $aaqmonitoring[$x+5];
            $DBaaqmonitoring->Value_parameter1 = $aaqmonitoring[$x+6];
            $DBaaqmonitoring->Value_parameter2 = $aaqmonitoring[$x+7];
            $DBaaqmonitoring->Value_parameter3 = $aaqmonitoring[$x+8];
            $DBaaqmonitoring->save();
        }

        $enhance = $request->input('enhance.*');
        $status = $request->input('status.*');
        $action = $request->input('action.*');
        $count = count($enhance);

        for ($x = 0; $x < $count; $x ++) {
            $DBoecondition = new OECondition();
            $DBoecondition->userid = Auth::user()->id;
            $DBoecondition->ECC_Condition = $enhance[$x];
            $DBoecondition->Status_of_Compliance = $status[$x];
            $DBoecondition->Actions_Taken = $action[$x];
            $DBoecondition->save();
        }

        $evmpprogram = $request->input('evmpprogram.*');
        $count = count($evmpprogram);

        for ($x = 0; $x < $count; $x += 3) {
            if ($x + 2 >= $count) {
                // We have reached the end of the array, so break out of the loop
                break;
            }

            $DBevmpprogram = new EVMPprogram();
            $DBevmpprogram->userid = Auth::user()->id;
            $DBevmpprogram->Enhancement_Mitigation_Measures = $evmpprogram[$x];
            $DBevmpprogram->Status_of_Compliance = $evmpprogram[$x+1];
            $DBevmpprogram->Actions_Taken = $evmpprogram[$x+2];

            $DBevmpprogram->save();
        }





        $aqg  = new AQG();
        $aqg->userid = Auth::user()->id;
        $aqg->Recyclable = $request->input('AQG1');
        $aqg->Biodegradable = $request->input('AQG2');
        $aqg->Residual = $request->input('AQG3');

        $aqg->save();

        $tqg  = new TQG();
        $tqg->userid = Auth::user()->id;
        $tqg->Recyclable = $request->input('TQG1');
        $tqg->Biodegradable = $request->input('TQG2');
        $tqg->Residual = $request->input('TQG3');

        $tqg->save();

        $aqc  = new AQC();
        $aqc->userid = Auth::user()->id;
        $aqc->Recyclable = $request->input('AQC1');
        $aqc->Biodegradable = $request->input('AQC2');
        $aqc->Residual = $request->input('AQC3');

        $aqc->save();

        $tqc  = new TQC();
        $tqc->userid = Auth::user()->id;
        $tqc->Recyclable = $request->input('TQC1');
        $tqc->Biodegradable = $request->input('TQC2');
        $tqc->Residual = $request->input('TQC3');

        $tqc->save();

        $eicc  = new EICC();
        $eicc->userid = Auth::user()->id;
        $eicc->Recyclable = $request->input('EICC1');
        $eicc->Biodegradable = $request->input('EICC2');
        $eicc->Residual = $request->input('EICC3');

        $eicc->save();

        $description = new Description();
        $description->userid = Auth::user()->id;
        $description->description = $request->input('description');

        $description->save();

        $awqmonitoring = new Awqmonitoring();
        $awqmonitoring->userid = Auth::user()->id;
        $awqmonitoring->name1 = $request->input('name1');
        $awqmonitoring->name2 = $request->input('name2');
        $awqmonitoring->name3 = $request->input('name3');
        $awqmonitoring->name4 = $request->input('name4');
        $awqmonitoring->name5 = $request->input('name5');
        $awqmonitoring->name6 = $request->input('name6');
        $awqmonitoring->name7 = $request->input('name7');
        $awqmonitoring->name8 = $request->input('name8');
        $awqmonitoring->unit1 = $request->input('unit1');
        $awqmonitoring->unit2 = $request->input('unit2');
        $awqmonitoring->unit3 = $request->input('unit3');
        $awqmonitoring->unit4 = $request->input('unit4');
        $awqmonitoring->unit5 = $request->input('unit5');
        $awqmonitoring->unit6 = $request->input('unit6');
        $awqmonitoring->unit7 = $request->input('unit7');
        $awqmonitoring->unit8 = $request->input('unit8');

        $awqmonitoring->save();



        $awqmonitoring1 = $request->input('awqmonitoring1');
        for ($x=0; $x<count($awqmonitoring1); $x+=10 ){
            $DBawqmonitoring1 = new Awqmonitoring1();
            $DBawqmonitoring1->userid = Auth::user()->id;
            $DBawqmonitoring1->Station_Description = $awqmonitoring1[$x];
            $DBawqmonitoring1->date = date('Y-m-d', strtotime($awqmonitoring1[$x+1]));
            $DBawqmonitoring1->value1 = $awqmonitoring1[$x+2];
            $DBawqmonitoring1->value2 = $awqmonitoring1[$x+3];
            $DBawqmonitoring1->value3 = $awqmonitoring1[$x+4];
            $DBawqmonitoring1->value4 = $awqmonitoring1[$x+5];
            $DBawqmonitoring1->value5 = $awqmonitoring1[$x+6];
            $DBawqmonitoring1->value6 = $awqmonitoring1[$x+7];
            $DBawqmonitoring1->value7 = $awqmonitoring1[$x+8];
            $DBawqmonitoring1->value8 = $awqmonitoring1[$x+9];

            $DBawqmonitoring1->save();

        }



        return redirect('moduleSix');
    }

    public function pdf(){
        $aaqmonitoring_parameter = AAQmonitoring_parameter::get();
        $aaqmonitoring = AAQmonitoring::get();
        $oecondition = OECondition::get();
        $aqg = AQG::get();
        $tqg = TQG::get();
        $tqc = TQC::get();
        $aqc = AQC::get();
        $eicc = EICC::get();
        $description = Description::get();
        $awqmonitoring = Awqmonitoring::get();


        $pdf = PDF::loadview('module.pdf5' ,
            [
                'aaqmonitoring_parameter'=>$aaqmonitoring_parameter,
                'aaqmonitoring'=>$aaqmonitoring,
                'oecondition'  =>$oecondition,
                'aqg'=>$aqg,
                'tqg'=>$tqg,
                'aqc'=>$aqc,
                'eicc'=>$eicc,
                'tqc'=>$tqc,
                'description'=>$description,
                'awqmonitoring'=>$awqmonitoring



            ]);
        return $pdf->download('moduleFive.pdf');


    }

    public static function generate(){
        // ... existing code ...
        $exist = Auth::user()->reference_no()->first();

        if ($exist==null) {
            $reference_no = Helper::IDGenerator(new referencen, 'ref_no', 5 , 'DENR');
            $data = new referencen();
            $data->ref_no = $reference_no;
            $data->userid = Auth::user()->id;
            $data->save();
        }
        return redirect('moduleFive');
    }
}
