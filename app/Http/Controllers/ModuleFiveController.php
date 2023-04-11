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
use App\Models\User;
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

        $oeconditions = $request->input('oecondition');
        foreach ($oeconditions as $i => $oec){
            $DBoecondition = new OECondition();
            $DBoecondition->userid = Auth::user()->id;
            $DBoecondition->ECC_Condition = $oec['ecc_condition'];
            $DBoecondition->Status_of_Compliance = $oec['status_of_compliance'];
            $DBoecondition->Actions_Taken = $oec['actions_taken'];
            $DBoecondition->save();
        }


/*        $oeconditions = $request->input('oecondition');
        for ($i = 0; $i < count($oeconditions); $i++) {
            $DBoecondition = new OECondition();
            $DBoecondition->userid = Auth::user()->id;
            $DBoecondition->ECC_Condition = $oeconditions[$i]['ecc_condition'];
            $DBoecondition->Status_of_Compliance = $oeconditions[$i]['status_of_compliance'];
            $DBoecondition->Actions_Taken = $oeconditions[$i]['actions_taken'];
            $DBoecondition->save();
        }*/



     /*   $evmpprogram = $request->input('evmpprogram');
        for ($i = 0; $i < count($evmpprogram); $i++) {
            $DBevmpprogram = new EVMPprogram();
            $DBevmpprogram->userid = Auth::user()->id;
            $DBevmpprogram->Enhancement_Mitigation_Measures = $evmpprogram[$i]['evm_condition'];
            $DBevmpprogram->Status_of_Compliance = $evmpprogram[$i]['evm_status_of_compliance'];
            $DBevmpprogram->Actions_Taken = $evmpprogram[$i]['evm_actions_taken'];
            $DBevmpprogram->save();
        }*/

        $evmpprogram = $request->input('evmpprogram');
        foreach ($evmpprogram as $i => $evmp) {
            $DBevmpprogram = new EVMPprogram();
            $DBevmpprogram->userid = Auth::user()->id;
            $DBevmpprogram->Enhancement_Mitigation_Measures = $evmp['evm_condition'];
            $DBevmpprogram->Status_of_Compliance = $evmp['evm_status_of_compliance'];
            $DBevmpprogram->Actions_Taken = $evmp['evm_actions_taken'];
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
    public function edit($id){

        $users = User::find($id);
        $referencens= Referencen::get();
        $aaqmonitoring_parameter = Auth::user()->aaqmonitoring_parameter()->get();
        $aaqmonitoring = Auth::user()->aaqmonitoring()->get();
        $oecondition = Auth::user()->oecondition()->get();
        $evmpprogram = Auth::user()->evmpprogram()->get();
        $aqg = Auth::user()->aqg()->get();
        $tqg = Auth::user()->tqg()->get();
        $aqc = Auth::user()->aqc()->get();
        $tqc = Auth::user()->tqc()->get();
        $eicc = Auth::user()->eicc()->get();
        $description = Auth::user()->description()->get();
        $awqmonitoring = Auth::user()->awqmonitoring()->get();
        $awqmonitoring1 = Auth::user()->awqmonitoring1()->get();


        return view('module.updatemoduleFive',
            compact('users',
                'referencens',
                'aaqmonitoring_parameter',
                'aaqmonitoring',
                'oecondition',
                'evmpprogram',
                'aqg',
                'tqg',
                'aqc',
                'tqc',
                'eicc',
                'description',
                'awqmonitoring',
                'awqmonitoring1',




            ));


    }

    public function update(Request $request, $id){

        $aqg = AQG::where('userid', $id)->first();
        $aqg->Recyclable = $request->input('AQG1');
        $aqg->Biodegradable = $request->input('AQG2');
        $aqg->Residual = $request->input('AQG3');
        $aqg->update();

        $tqg = TQG::where('userid', $id)->first();
        $tqg->Recyclable = $request->input('TQG1');
        $tqg->Biodegradable = $request->input('TQG2');
        $tqg->Residual = $request->input('TQG3');
        $tqg->update();

        $aqc = AQC::where('userid', $id)->first();
        $aqc->Recyclable = $request->input('AQC1');
        $aqc->Biodegradable = $request->input('AQC2');
        $aqc->Residual = $request->input('AQC3');
        $aqc->update();

        $tqc = TQC::where('userid', $id)->first();
        $tqc->Recyclable = $request->input('TQC1');
        $tqc->Biodegradable = $request->input('TQC2');
        $tqc->Residual = $request->input('TQC3');
        $tqc->update();

        $eicc = EICC::where('userid', $id)->first();
        $eicc->Recyclable = $request->input('EICC1');
        $eicc->Biodegradable = $request->input('EICC2');
        $eicc->Residual = $request->input('EICC3');
        $eicc->update();

        $description = Description::where('userid', $id)->first();
        $description->description = $request->input('description');
        $description->update();

        $awqmonitoring = Awqmonitoring::where('userid', $id)->first();
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
        $awqmonitoring->update();


        $aaqmonitoring_parameter = AAQmonitoring_parameter::where('userid', $id)->first();
        $aaqmonitoring_parameter->aaqname_parameter1 = $request->input('aaqname_parameter1');
        $aaqmonitoring_parameter->aaqname_parameter2 = $request->input('aaqname_parameter2');
        $aaqmonitoring_parameter->aaqname_parameter3 = $request->input('aaqname_parameter3');
        $aaqmonitoring_parameter->update();

        $aaqmonitoring = $request->input('aaqmonitoring');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBaaqmonitoring = AAQmonitoring::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBaaqmonitoring as $index => $record) {
            $record->station_description = $aaqmonitoring[$index*9];
            $record->date = $aaqmonitoring[$index*9+1];
            $record->noise_level_db = $aaqmonitoring[$index*9+2];
            $record->CO_mg_ncm = $aaqmonitoring[$index*9+3];
            $record->NOx_mg_ncm = $aaqmonitoring[$index*9+4];
            $record->particulates_mg_ncm = $aaqmonitoring[$index*9+5];
            $record->Value_parameter1 = $aaqmonitoring[$index*9+6];
            $record->Value_parameter2 = $aaqmonitoring[$index*9+7];
            $record->Value_parameter3 = $aaqmonitoring[$index*9+8];
            $record->update();
        }
        for ($x = count($DBaaqmonitoring)*9; $x < count($aaqmonitoring); $x += 9) {
            $newRecord = new AAQmonitoring();
            $newRecord->userid = $userId;
            $newRecord->station_description = $aaqmonitoring[$x];
            $newRecord->date = $aaqmonitoring[$x+1];
            $newRecord->noise_level_db = $aaqmonitoring[$x+2];
            $newRecord->CO_mg_ncm = $aaqmonitoring[$x+3];
            $newRecord->NOx_mg_ncm = $aaqmonitoring[$x+4];
            $newRecord->particulates_mg_ncm = $aaqmonitoring[$x+5];
            $newRecord->Value_parameter1 = $aaqmonitoring[$x+6];
            $newRecord->Value_parameter2 = $aaqmonitoring[$x+7];
            $newRecord->Value_parameter3 = $aaqmonitoring[$x+8];
            $newRecord->save();
        }

        $awqmonitoring1 = $request->input('awqmonitoring1');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBawqmonitoring1 = Awqmonitoring1::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBawqmonitoring1 as $index => $record) {
            $record->Station_Description = $awqmonitoring1[$index*10];
            $record->Date = $awqmonitoring1[$index*10+1];
            $record->value1 = $awqmonitoring1[$index*10+2];
            $record->value2 = $awqmonitoring1[$index*10+3];
            $record->value3 = $awqmonitoring1[$index*10+4];
            $record->value4 = $awqmonitoring1[$index*10+5];
            $record->value5 = $awqmonitoring1[$index*10+6];
            $record->value6 = $awqmonitoring1[$index*10+7];
            $record->value7 = $awqmonitoring1[$index*10+8];
            $record->value8 = $awqmonitoring1[$index*10+9];
            $record->update();
        }
        for ($x = count($DBawqmonitoring1)*10; $x < count($aaqmonitoring); $x += 10) {
            $newRecord = new Awqmonitoring1();
            $newRecord->userid = $userId;
            $newRecord->Station_Description = $awqmonitoring1[$x];
            $newRecord->Date = $awqmonitoring1[$x+1];
            $newRecord->value1 = $awqmonitoring1[$x+2];
            $newRecord->value2 = $awqmonitoring1[$x+3];
            $newRecord->value3 = $awqmonitoring1[$x+4];
            $newRecord->value4 = $awqmonitoring1[$x+5];
            $newRecord->value5 = $awqmonitoring1[$x+6];
            $newRecord->value6= $awqmonitoring1[$x+7];
            $newRecord->value7 = $awqmonitoring1[$x+8];
            $newRecord->value8 = $awqmonitoring1[$x+9];
            $newRecord->save();
        }

        $oecondition = $request->input('oecondition');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBoecondition = OECondition::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBoecondition as $index => $record) {
            $record->ECC_Condition = $oecondition[$index]['ecc_condition'];
            $record->Status_of_Compliance = $oecondition[$index]['status_of_compliance'];
            $record->Actions_Taken = $oecondition[$index]['actions_taken'];
            $record->save();
        }

        // Create a new record for any remaining data
        for ($index = count($DBoecondition); $index < count($oecondition); $index++) {
            $newRecord = new OECondition();
            $newRecord->userid = $userId;
            $newRecord->ECC_Condition = $oecondition[$index]['ecc_condition'];
            $newRecord->Status_of_Compliance = $oecondition[$index]['status_of_compliance'];
            $newRecord->Actions_Taken = $oecondition[$index]['actions_taken'];
            $newRecord->save();
        }

        $evmpprogram = $request->input('evmpprogram');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBevmpprogram = EVMPprogram::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBevmpprogram as $index => $record) {
            $record->Enhancement_Mitigation_Measures = $evmpprogram[$index]['evm_condition'];
            $record->Status_of_Compliance = $evmpprogram[$index]['evm_status_of_compliance'];
            $record->Actions_Taken = $evmpprogram[$index]['evm_actions_taken'];
            $record->save();
        }

        // Create a new record for any remaining data
        for ($index = count($DBevmpprogram); $index < count($evmpprogram); $index++) {
            $newRecord = new EVMPprogram();
            $newRecord->userid = $userId;
            $newRecord->Enhancement_Mitigation_Measures = $evmpprogram[$index]['evm_condition'];
            $newRecord->Status_of_Compliance = $evmpprogram[$index]['evm_status_of_compliance'];
            $newRecord->Actions_Taken = $evmpprogram[$index]['evm_actions_taken'];
            $newRecord->save();
        }







        return redirect()->back();

    }



    public function pdf(){
        $aaqmonitoring_parameter = Auth::user()->aaqmonitoring_parameter()->get();
        $aaqmonitoring = Auth::user()->aaqmonitoring()->get();
        $oecondition = Auth::user()->oecondition()->get();
        $evmpprogram = Auth::user()->evmpprogram()->get();
        $aqg = Auth::user()->aqg()->get();
        $tqg = Auth::user()->tqg()->get();
        $tqc = Auth::user()->tqc()->get();
        $aqc = Auth::user()->aqc()->get();
        $eicc = Auth::user()->eicc()->get();
        $description = Auth::user()->description()->get();
        $awqmonitoring = Auth::user()->awqmonitoring()->get();
        $awqmonitoring1 = Auth::user()->awqmonitoring1()->get();

        $customPaper = array(0,0,800.00,800.90);
        $pdf = PDF::loadview('module.pdf5' ,
            [
                'aaqmonitoring_parameter'=>$aaqmonitoring_parameter,
                'aaqmonitoring'=>$aaqmonitoring,
                'oecondition'  =>$oecondition,
                'evmpprogram'  =>$evmpprogram,
                'aqg'=>$aqg,
                'tqg'=>$tqg,
                'aqc'=>$aqc,
                'eicc'=>$eicc,
                'tqc'=>$tqc,
                'description'=>$description,
                'awqmonitoring'=>$awqmonitoring,
                'awqmonitoring1'=>$awqmonitoring1,


            ])->setPaper($customPaper,'A4');
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
