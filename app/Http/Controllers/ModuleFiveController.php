<?php

namespace App\Http\Controllers;

use App\Models\AAQmonitoring;
use App\Models\AQC;
use App\Models\AQG;
use App\Models\Awqmonitoring;
use App\Models\Awqmonitoring1;
use App\Models\Description;
use App\Models\EICC;
use App\Models\EVMPprogram;
use App\Models\OECondition;
use App\Models\TQC;
use App\Models\TQG;
use Illuminate\Http\Request;
use PDF;

class ModuleFiveController extends Controller
{
    public function index(){
        $aaqmonitoring = AAQmonitoring::all();
        $oecondition = OECondition::all();
        $evmpprogram = EVMPprogram::all();
        $aqg = AQG::all();
        $tqg = TQG::all();
        $aqc = AQC::all();
        $tqc = TQC::all();
        $eicc = EICC::all();
        $description = Description::all();
        $awqmonitoring = Awqmonitoring::all();
        $awqmonitoring1 = Awqmonitoring1::all();


        return view('module.moduleFive');
        -with(['aaqmonitoring'=>$aaqmonitoring,'oecondition'=>$oecondition,'evmpprogram'=>$evmpprogram,'aqg'=>$aqg,'tqg'=>$tqg,
        'aqc'=>$aqc,'tqc'=>$tqc,'eicc'=>$eicc,'description'=>$description,'awqmonitoring'=>$awqmonitoring,'awqmonitoring1'=>$awqmonitoring1
    ]);

    }

    public function save(Request $request){

        $aaqmonitoring = $request->input('aaqmonitoring');
        for ($x=0; $x<count($aaqmonitoring); $x+=6 ){
            $DBaaqmonitoring = new AAQmonitoring();
            $DBaaqmonitoring->station_description = $aaqmonitoring[$x];
            $DBaaqmonitoring->date = $aaqmonitoring[$x+1];
            $DBaaqmonitoring->noise_level_db = $aaqmonitoring[$x+2];
            $DBaaqmonitoring->CO_mg_ncm = $aaqmonitoring[$x+3];
            $DBaaqmonitoring->NOx_mg_ncm = $aaqmonitoring[$x+4];
            $DBaaqmonitoring->particulates_mg_ncm = $aaqmonitoring[$x+5];

            $DBaaqmonitoring->save();
        }


        $oecondition = $request->input('oecondition');

        for ($x=0; $x<count($oecondition); $x+=3 ){
            $DBoecondition = new OECondition();
            $DBoecondition->ECC_Condition = $oecondition[$x];
            $DBoecondition->Status_of_Compliance = $oecondition[$x+1];
            $DBoecondition->Actions_Taken = $oecondition[$x+2];


            $DBoecondition->save();
        }



      //  $evmpprogram = $request->input('evmpprogram');
      //  for ($x=0; $x<count($evmpprogram); $x+=3 ){
          //  $DBevmpprogram = new EVMPprogram();
          //  $DBevmpprogram->Enhancement_Mitigation_Measures = $evmpprogram[$x];
          //  $DBevmpprogram->Status_of_Compliance = $evmpprogram[$x+1];
          //  $DBevmpprogram->Actions_Taken = $evmpprogram[$x+2];

           // $DBevmpprogram->save();
      //  }



        $aqg  = new AQG();
        $aqg->Recyclable = $request->input('AQG1');
        $aqg->Biodegradable = $request->input('AQG2');
        $aqg->Residual = $request->input('AQG3');

        $aqg->save();

        $tqg  = new TQG();
        $tqg->Recyclable = $request->input('TQG1');
        $tqg->Biodegradable = $request->input('TQG2');
        $tqg->Residual = $request->input('TQG3');

        $tqg->save();

        $aqc  = new AQC();
        $aqc->Recyclable = $request->input('AQC1');
        $aqc->Biodegradable = $request->input('AQC2');
        $aqc->Residual = $request->input('AQC3');

        $aqc->save();

        $tqc  = new TQC();
        $tqc->Recyclable = $request->input('TQC1');
        $tqc->Biodegradable = $request->input('TQC2');
        $tqc->Residual = $request->input('TQC3');

        $tqc->save();

        $eicc  = new EICC();
        $eicc->Recyclable = $request->input('EICC1');
        $eicc->Biodegradable = $request->input('EICC2');
        $eicc->Residual = $request->input('EICC3');

        $eicc->save();

        $description = new Description();
        $description->description = $request->input('description');

        $description->save();

        $awqmonitoring = new Awqmonitoring();
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
            $DBawqmonitoring1->Outlet_No = $awqmonitoring1[$x];
            $DBawqmonitoring1->Date = $awqmonitoring1[$x+1];
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



        return view('module.moduleFive');
    }

    public function pdf(){


    }
}
