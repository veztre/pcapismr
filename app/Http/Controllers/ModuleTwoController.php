<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Disposal;
use App\Models\HWDetails;
use App\Models\HwGeneration;
use App\Models\Osisa;
use App\Models\referencen;
use App\Models\Storage;
use App\Models\Transporter;
use App\Models\Treater;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Reference\Reference;

class ModuleTwoController extends Controller
{
    public function index(){
        $hwGeneration = Auth::user()->hwGeneration();
        $hwDetails = Auth::user()->hwDetails();
        $storage = Auth::user()->storage();
        $transporter = Auth::user()->transporter();
        $treater = Auth::user()->treater();
        $disposal = Auth::user()->disposal();
        $osisa = Auth::user()->osisa();
        $reference= Auth::user()->reference_no()->first();



        return view('module.moduleTwo')
            ->with([
                'hwGeneration'=>$hwGeneration,
                'hwDetails'=>$hwDetails,
                'storage'=>$storage,
                'transporter'=>$transporter,
                'treater'=>$treater,
                'disposal'=>$disposal,
                'osisa'=>$osisa,
                'referencen'=>$reference->ref_no
            ]);


    }

    public function save(Request $request){

        $hwGeneration = $request->input('hwGeneration');
        for ($x=0; $x<count($hwGeneration); $x+=8 ){
            $DBhwGeneration = new HwGeneration();
            $DBhwGeneration->userid = Auth::user()->id;
            $DBhwGeneration->Hwno = $hwGeneration[$x];
            $DBhwGeneration->HWclass = $hwGeneration[$x+1];
            $DBhwGeneration->HWNature = $hwGeneration[$x+2];
            $DBhwGeneration->HWcataloguing = $hwGeneration[$x+3];
            $DBhwGeneration->RemainingQty = $hwGeneration[$x+4];
            $DBhwGeneration->PreviousReportUnit = $hwGeneration[$x+5];
            $DBhwGeneration->HWGeneratedQty = $hwGeneration[$x+6];
            $DBhwGeneration->QuarterUnit = $hwGeneration[$x+7];
            $DBhwGeneration->save();
        }

        $hwDetails = $request->input('hwDetails');
        for ($x=0; $x<count($hwDetails); $x+=5 ){
            $DBhwDetails = new HWDetails();
            $DBhwDetails ->userid = Auth::user()->id;
            $DBhwDetails->HWno = $hwDetails[$x];
            $DBhwDetails->HWclass = $hwDetails[$x+1];
            $DBhwDetails->QtyOfHWTreated = $hwDetails[$x+2];
            $DBhwDetails->Unit = $hwDetails[$x+3];
            $DBhwDetails->TSDLocation = $hwDetails[$x+4];

            $DBhwDetails->save();
        }
        $storage = $request->input('storage');
        for ($x=0; $x<count($storage); $x+=2 ){
            $DBstorage = new Storage();
            $DBstorage->userid = Auth::user()->id;
            $DBstorage->name = $storage[$x];
            $DBstorage->method = $storage[$x+1];
            $DBstorage->save();
        }
        $transporter = $request->input('transporter');
        for ($x=0; $x<count($transporter); $x+=4){
            $DBtransporter = new Transporter();
            $DBtransporter->userid = Auth::user()->id;
            $DBtransporter->transpo_id = $transporter[$x];
            $DBtransporter->name = $transporter[$x+1];
            $DBtransporter->method = $transporter[$x+2];
            $DBtransporter->date = date('Y-m-d', strtotime($transporter[$x+3]));
            $DBtransporter->save();
        }
        $treater = $request->input('treater');
        for ($x=0; $x<count($treater); $x+=4){
            $DBtreater = new Treater();
            $DBtreater->userid = Auth::user()->id;
            $DBtreater->treater_id = $treater[$x];
            $DBtreater->name = $treater[$x+1];
            $DBtreater->method = $treater[$x+2];
            $DBtreater->date = date('Y-m-d', strtotime($treater[$x+3]));
            $DBtreater->save();
        }
        $disposal = $request->input('disposal');
        for ($x=0; $x<count($disposal); $x+=4){
            $DBdisposal = new Disposal();
            $DBdisposal->userid = Auth::user()->id;
            $DBdisposal->disposal_id = $disposal[$x];
            $DBdisposal->name = $disposal[$x+1];
            $DBdisposal->method = $disposal[$x+2];
            $DBdisposal->date = date('Y-m-d', strtotime($disposal[$x+3]));
            $DBdisposal->save();
        }

        $osisa = $request->input('osisa');
        for ($x=0; $x<count($osisa); $x+=4){
            $DBosisa = new Osisa();
            $DBosisa->userid = Auth::user()->id;
            $DBosisa->DateConducted = $osisa[$x];
            $DBosisa->PremisesAreaInspected = $osisa[$x+1];
            $DBosisa->FindingsAndObservations = $osisa[$x+2];
            $DBosisa->CorrectiveActionsTaken = $osisa[$x+3];
            $DBosisa->save();
        }


        return redirect('moduleThree');
    }

    public function pdf (){



        $hwGeneration = Auth::user()->hwGeneration()->get();
        $hwDetails = Auth::user()->hwDetails()->get();
        $storage = Auth::user()->storage()->get();
        $transporter = Auth::user()->transporter()->get();
        $treater = Auth::user()->treater()->get();
        $disposal = Auth::user()->disposal()->get();
        $osisa = Auth::user()->osisa()->get();

        $customPaper = array(0,0,800.00,800.90);
        $pdf = PDF::loadview('module.pdf2',[
            'hwGeneration'=>$hwGeneration,
            'hwDetails'=>$hwDetails,
            'storage'=>$storage,
            'transporter'=>$transporter,
            'treater'=>$treater,
            'disposal'=>$disposal,
            'osisa'=>$osisa


        ])->setPaper($customPaper,'A4');

        return $pdf->download('moduleTwo.pdf');


    }

    public function edit($id){

        $referencens = Auth::user()->reference_no()->get();
        $hwGeneration = Auth::user()->hwGeneration()->get();
        $hwDetails = Auth::user()->hwDetails()->get();
        $storage = Auth::user()->storage()->get();
        $treater = Auth::user()->treater()->get();
        $transporter = Auth::user()->transporter()->get();
        $disposal = Auth::user()->disposal()->get();
        $osisa = Auth::user()->osisa()->get();

        return view('module.updatemoduleTwo',
            compact(
                'referencens',
                'hwGeneration',
                'hwDetails',
                'storage',
                'treater',
                'disposal',
                'transporter',
                'osisa',

            ));


    }

    public function update(Request $request, $id)
    {

        $hwGeneration = $request->input('hwGeneration');
        $userId = Auth::user()->id;

        // Get all records for the current user
        $DBhwGeneration = HwGeneration::where('userid', $userId)->get();

        // Loop through all records and update each one
        foreach ($DBhwGeneration as $index => $record) {
            $record->Hwno = $hwGeneration[$index*8];
            $record->HWclass = $hwGeneration[$index*8+1];
            $record->HWNature = $hwGeneration[$index*8+2];
            $record->HWcataloguing = $hwGeneration[$index*8+3];
            $record->RemainingQty = $hwGeneration[$index*8+4];
            $record->PreviousReportUnit = $hwGeneration[$index*8+5];
            $record->HWGeneratedQty = $hwGeneration[$index*8+6];
            $record->QuarterUnit = $hwGeneration[$index*8+7];
            $record->update();
        }


        for ($x = count($DBhwGeneration)*8; $x < count($hwGeneration); $x += 8) {
            $newRecord = new HwGeneration();
            $newRecord->userid = $userId;
            $newRecord->Hwno = $hwGeneration[$x];
            $newRecord->HWclass = $hwGeneration[$x+1];
            $newRecord->HWNature = $hwGeneration[$x+2];
            $newRecord->HWcataloguing = $hwGeneration[$x+3];
            $newRecord->RemainingQty = $hwGeneration[$x+4];
            $newRecord->PreviousReportUnit = $hwGeneration[$x+5];
            $newRecord->HWGeneratedQty = $hwGeneration[$x+6];
            $newRecord->QuarterUnit = $hwGeneration[$x+7];
            $newRecord->save();
        }



        $hwDetails = $request->input('hwDetails');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBhwDetails = HWDetails::where('userid', $userId)->get();

        // Loop through all records and update each one
        foreach ($DBhwDetails as $index => $record) {
            $record->Hwno = $hwDetails[$index*5];
            $record->HWclass = $hwDetails[$index*5+1];
            $record->QtyOfHWTreated = $hwDetails[$index*5+2];
            $record->Unit = $hwDetails[$index*5+3];
            $record->TSDLocation = $hwDetails[$index*5+4];
            $record->update();
        }
        for ($x = count($DBhwDetails)*5; $x < count($hwDetails); $x += 5) {
            $newRecord = new HWDetails();
            $newRecord->userid = $userId;
            $newRecord->Hwno = $hwDetails[$x];
            $newRecord->HWclass = $hwDetails[$x+1];
            $newRecord->QtyOfHWTreated = $hwDetails[$x+2];
            $newRecord->Unit = $hwDetails[$x+3];
            $newRecord->TSDLocation = $hwDetails[$x+4];
            $newRecord->save();


        }

        $storage = $request->input('storage');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBstorage = Storage::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBstorage as $index => $record) {
            $record->name = $storage[$index*2];
            $record->method = $storage[$index*2+1];

            $record->update();
        }
        for ($x = count($DBstorage)*2; $x < count($storage); $x += 2) {
            $newRecord = new Storage();
            $newRecord->userid = $userId;
            $newRecord->name = $storage[$x];
            $newRecord->method = $storage[$x+1];
            $newRecord->save();


        }

        $transporter = $request->input('transporter');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBtransporter = Transporter::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBtransporter as $index => $record) {
            $record->transpo_id = $transporter[$index*4];
            $record->name = $transporter[$index*4+1];
            $record->method = $transporter[$index*4+2];
            $record->date = date('Y-m-d', strtotime($transporter[$index*4+3]));
            $record->update();
        }
        for ($x = count($DBtransporter)*4; $x < count($transporter); $x += 4) {
            $newRecord = new Transporter();
            $newRecord->userid = $userId;
            $newRecord->transpo_id = $transporter[$x];
            $newRecord->name = $transporter[$x+1];
            $newRecord->method = $transporter[$x+2];
            $newRecord->date = date('Y-m-d', strtotime($transporter[$x+3]));

            $newRecord->save();



        }

        $treaters = $request->input('treater');
        $userId = Auth::user()->id;
        $DBtreater = Treater::where('userid', $userId)->get();

        foreach ($DBtreater as $index => $record) {
            $record->treater_id = $treaters[$index*4];
            $record->name = $treaters[$index*4+1];
            $record->method = $treaters[$index*4+2];
            $record->date = date('Y-m-d', strtotime($treaters[$index*4+3]));
            $record->update();
        }

        for ($x = count($DBtreater)*4; $x < count($treaters); $x += 4) {
            $newRecord = new Treater();
            $newRecord->userid = $userId;
            $newRecord->treater_id = $treaters[$x];
            $newRecord->name = $treaters[$x+1];
            $newRecord->method = $treaters[$x+2];
            $newRecord->date = date('Y-m-d', strtotime($treaters[$x+3]));
            $newRecord->save();
        }


        $disposal = $request->input('disposal');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBdisposal = Disposal::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBdisposal as $index => $record) {
            $record->disposal_id = $disposal[$index*4];
            $record->name = $disposal[$index*4+1];
            $record->method = $disposal[$index*4+2];
            $record->date = date('Y-m-d', strtotime($disposal[$index*4+3]));

            $record->update();
        }
        for ($x = count($DBdisposal)*4; $x < count($disposal); $x += 4) {
            $newRecord = new Disposal();
            $newRecord->userid = $userId;
            $newRecord->disposal_id = $disposal[$x];
            $newRecord->name = $disposal[$x+1];
            $newRecord->method = $disposal[$x+2];
            $newRecord->date = date('Y-m-d', strtotime($disposal[$x+3]));

            $newRecord->save();
        }

        $osisa = $request->input('osisa');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBosisa = Osisa::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBosisa as $index => $record) {
            $record->DateConducted = date('Y-m-d', strtotime($osisa[$index*4]));
            $record->PremisesAreaInspected = $osisa[$index*4+1];
            $record->FindingsAndObservations = $osisa[$index*4+2];
            $record->CorrectiveActionsTaken = $osisa[$index*4+3];
            $record->update();
        }

        for ($x = count($DBosisa)*4; $x < count($osisa); $x += 4) {

            $newRecord = new Osisa();
            $newRecord->userid = $userId;
            $newRecord->DateConducted =$osisa[$x];
            $newRecord->PremisesAreaInspected = $osisa[$x+1];
            $newRecord->FindingsAndObservations = $osisa[$x+2];
            $newRecord->CorrectiveActionsTaken = $osisa[$x+3];
            $newRecord->save();
        }



        return redirect()->back();
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
        return redirect('moduleTwo');
    }

}

