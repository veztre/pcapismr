<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Acno;
use App\Models\Aircon;
use App\Models\Ccoreg;
use App\Models\Cncno;
use App\Models\Denrid;
use App\Models\Dpno;
use App\Models\Gic;

use App\Models\Import;
use App\Models\Operation;
use App\Models\Permmit;
use App\Models\Piccs;
use App\Models\Pmpin;
use App\Models\Pono;
use App\Models\Priority;
use App\Models\Production;
use App\Models\Quarterdd;
use App\Models\referencen;
use App\Models\Smallquan;
use App\Models\TransporterReg;
use App\Models\Tsdreg;
use App\Models\Upload;
use App\Models\User;
use App\Models\Yeardd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Support\Carbon;
use League\CommonMark\Reference\Reference;
use App\Models\Addfacility;
use App\Models\Plant;

class ModuleOneController extends Controller
{
    public function index(){
        $year = Auth::user()->year;
        $quarter = Auth::user()->quarter;
        $plant = Auth::user()->plant;
        $aircon = Auth::user()->aircon;
        $gic = Auth::user()->gic;
        $acno = Auth::user()->acno;
        $dpno = Auth::user()->dpno;
        $cncno = Auth::user()->cncno;
        $denrid = Auth::user()->denrid;
        $transporterReg = Auth::user()->transporterReg;
        $tsdreg = Auth::user()->tsdreg;
        $ccoreg = Auth::user()->ccoreg;
        $import = Auth::user()->import;
        $permit = Auth::user()->permit;
        $smallquan = Auth::user()->smallquan;
        $priority = Auth::user()->priority;
        $piccs = Auth::user()->piccs;
        $pmpin = Auth::user()->pmpin;
        $pono = Auth::user()->pono;
        $operation = Auth::user()->operation;
        $production = Auth::user()->production;
        $reference= Auth::user()->reference_no->first();
        $upload = Upload::all();
       // $addfacility = Addfacility::get();


        //$users = User::all();

        return view('module.moduleOne', compact('users', 'addfacility'))
            ->with([
                'yeardds'=>$year,
                'quarterdds'=>$quarter,
                'aircon' => $aircon,
                'gic' => $gic,
                'acno' => $acno,
                'dpno' => $dpno,
                'cncno' => $cncno,
                'denrid' => $denrid,
                'transporterReg' => $transporterReg,
                'tsdreg' => $tsdreg,
                'ccoreg' => $ccoreg,
                'import' => $import,
                'permit' => $permit,
                'smallquan' => $smallquan,
                'priority' => $priority,
                'piccs' => $piccs,
                'pmpin' => $pmpin,
                'pono' => $pono,
                'operation' => $operation,
                'production' => $production,
                'referencen'=>$reference->ref_no,
                'uploads'=>$upload,
                'plants'=>$plant,
            ]);



    }

    public function create(){

        $addfacilities = Auth::user()->addfacility;
        return view('module.moduleOne',['addfacility'=>$addfacilities]);
    }

    public function save(Request $request ){
    try{
            $userId = Auth::user()->id;
            //generate reference number
            $reference_no = Helper::IDGenerator(new referencen, 'ref_no', 5 , 'DENR');
            //create reference number
            $refNo = new referencen();
            $refNo->ref_no = $reference_no;
            $refNo->userid = Auth::user()->id;
            $refNo->save();
            // updated value
            $year = new Yeardd();
            $year->userid = $userId;
            $year->year = $request->input('year');
            $year->save();

            $quarter = new Quarterdd();
            $quarter->userid = $userId;
            $quarter->quarter = $request->input('quarter');
            $quarter->save();

            $plant = new Plant();
            $plant->userid = $userId;
            $plant ->plantname = $request->input('plantname');
            $plant->save();
    // end updated value
            $gic = new Gic();
            $gic->userid = $userId;
            $gic->description = $request->input('description');
            $gic->save();


            $aircon = new Aircon();
            $aircon->userid = $userId;
            $aircon->permit = $request->input('ACPermit');
            $aircon->dateIssued = $request->input('ACIssued');
            $aircon->dateExpired = $request->input('ACExpire');
            $aircon->save();


            $denrid  = new Denrid();
            $denrid->userid = $userId;
            $denrid->permit = $request->input('DENRpermit');
            $denrid->dateIssued = $request->input('DENRdateIssued');
            $denrid->dateExpired = $request->input('DENRdateExpired');
            $denrid->save();

            $transporterReg  = new TransporterReg();
            $transporterReg->userid = $userId;
            $transporterReg->permit = $request->input('Transportpermit');
            $transporterReg->dateIssued = $request->input('TransportdateIssued');
            $transporterReg->dateExpired = $request->input('TransportdateExpired');
            $transporterReg->save();

            $tsdreg  = new Tsdreg();
            $tsdreg->userid = $userId;
            $tsdreg->permit = $request->input('TSDpermit');
            $tsdreg->dateIssued = $request->input('TSDdateIssued');
            $tsdreg->dateExpired = $request->input('TSDdateExpired');
            $tsdreg->save();

            $acno  = new Acno();
            $acno->userid = $userId;
            $acno->permit = $request->input('ACNOPermit');
            $acno->dateIssued = $request->input('ACNOIssued');
            $acno->dateExpired = $request->input('ACNOExpired');
            $acno->save();

            $operation  = new Operation();
            $operation->userid= $userId;
            $operation->aveOPhours = $request->input('aveOPhours');
            $operation->aveOPdays = $request->input('aveOPdays');
            $operation->aveOPshift = $request->input('aveOPshift');
            $operation->maxOPhours = $request->input('maxOPhours');
            $operation->maxOPdays = $request->input('maxOPdays');
            $operation->maxOPshift = $request->input('maxOPshift');
            $operation->save();

            $production  = new Production();
            $production->userid = $userId;
            $production->aveProduction = $request->input('aveProduction');
            $production->totalOutput = $request->input('totalOutput');
            $production->totalConsumption = $request->input('totalConsumption');
            $production->totalElectric = $request->input('totalElectric');
            $production->save();


            $dpno = $request->input('dpno');
            for ($x=0; $x<count($dpno); $x+=3){
                $DBdpno = new Dpno();
                $DBdpno->userid = $userId;
                $DBdpno->permit = $dpno[$x];
                $DBdpno->dateIssued = $dpno[$x+1];
                $DBdpno->dateExpired = $dpno[$x+2];
                $DBdpno->save();
            }

            $cncno = $request->input('cncno');
            for ($x=0; $x<count($cncno); $x+=3){
                $DBcncno = new Cncno();
                $DBcncno->userid = $userId;
                $DBcncno->permit = $cncno[$x];
                $DBcncno->dateIssued = $cncno[$x+1];
                $DBcncno->dateExpired = $cncno[$x+2];
                $DBcncno->save();
            }


            $ccoreg = $request->input('ccoreg');
            for ($x=0; $x<count($ccoreg); $x+=3){
                $DBccoreg = new Ccoreg();
                $DBccoreg->userid = $userId;
                $DBccoreg->permit = $ccoreg[$x];
                $DBccoreg->dateIssued = $ccoreg[$x+1];
                $DBccoreg->dateExpired = $ccoreg[$x+2];
                $DBccoreg->save();

            }

            $import = $request->input('import');
            for ($x=0; $x<count($import); $x+=3){
                $DBimport = new Import();
                $DBimport->userid = $userId;
                $DBimport->permit = $import[$x];
                $DBimport->dateIssued = $import[$x+1];
                $DBimport->dateExpired = $import[$x+2];
                $DBimport->save();
            }

            $permit = $request->input('permit');
            for ($x=0; $x<count($permit); $x+=3){
                $DBpermit = new Permmit();
                $DBpermit->userid = $userId;
                $DBpermit->permit = $permit[$x];
                $DBpermit->dateIssued = $permit[$x+1];
                $DBpermit->dateExpired = $permit[$x+2];
                $DBpermit->save();

            }

            $smallquan = $request->input('smallquan');
            for ($x=0; $x<count($permit); $x+=3){
                $DBsmallquan = new Smallquan();
                $DBsmallquan->userid = $userId;
                $DBsmallquan->permit = $smallquan[$x];
                $DBsmallquan->dateIssued = $smallquan[$x+1];
                $DBsmallquan->dateExpired = $smallquan[$x+2];
                $DBsmallquan->save();

            }
            $priority = $request->input('priority');
            for ($x=0; $x<count($priority); $x+=3){
                $DBpriority = new Priority();
                $DBpriority->userid = $userId;
                $DBpriority->permit = $priority[$x];
                $DBpriority->dateIssued = $priority[$x+1];
                $DBpriority->dateExpired = $priority[$x+2];
                $DBpriority->save();

            }

            $piccs = $request->input('piccs');
            for ($x=0; $x<count($piccs); $x+=3){
                $DBpiccs = new Piccs();
                $DBpiccs->userid = $userId;
                $DBpiccs->permit = $piccs[$x];
                $DBpiccs->dateIssued = $piccs[$x+1];
                $DBpiccs->dateExpired = $piccs[$x+2];
                $DBpiccs->save();

            }

            $pmpin = $request->input('pmpin');
            for ($x=0; $x<count($pmpin); $x+=3){
                $DBpmpin = new Pmpin();
                $DBpmpin->userid = $userId;
                $DBpmpin->permit = $pmpin[$x];
                $DBpmpin->dateIssued = $pmpin[$x+1];
                $DBpmpin->dateExpired = $pmpin[$x+2];
                $DBpmpin->save();

            }

            $pono = $request->input('pono');
            for ($x=0; $x<count($pono); $x+=3){
                $DBpono = new Pono();
                $DBpono->userid = $userId;
                $DBpono->permit = $pono[$x];
                $DBpono->dateIssued = $pono[$x+1];
                $DBpono->dateExpired = $pono[$x+2];
                $DBpono->save();

            }

            if ($files = $request->file('file')) {
                $userId = Auth::user()->id;
                $reference = Auth::user()->reference_no; // Fetch reference number of authenticated user
                $refNo = $reference->ref_no; // Extract the reference number from the fetched object
                $userFolder = $userId . '/' . $refNo . '/moduleOneAttachment'; // Set user folder path

                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();

                    if ($file->storeAs($userFolder, $name,'public')) {
                        $upload = new Upload();
                        $upload->file = $name;
                        $upload->userid = $userId;
                        $upload->save();
                    }
                }
            }
            //to update the module completed by the user
            $user = User::find(Auth::user()->id);
            $user->page_completed = "Module One";
            $user->update();
            return redirect('moduleTwoTransition');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(['input_error' => $e->getMessage()]);
        }
 }


    public function pdf(){
        //$addfacility = Auth::user()->addfacility()->get();
        //$tsdreg = Auth::user()->tsdreg;

        $customPaper = array(0,0,800.00,800.90);
        $pdf = PDF::loadView('module.pdf1' , [
            'ref_no'=>Auth::user()->reference_no,
            'year'=>Auth::user()->year,
            'quarter'=>Auth::user()->quarter,
            'plant'=>Auth::user()->plant,
            'gic'=>Auth::user()->gic,
            'aircon'=>Auth::user()->aircon,
            'dpno'=>Auth::user()->dpno()->get(),
            'cncno'=>Auth::user()->cncno()->get(),
            'denrid'=>Auth::user()->denrid,
            'transporterReg'=>Auth::user()->transporterReg,
            'tsdreg'=>Auth::user()->tsdreg,
            'ccoreg'=>Auth::user()->ccoreg()->get(),
            'import'=>Auth::user()->import()->get(),
            'permit'=>Auth::user()->permit,
            'smallquan'=>Auth::user()->smallquan()->get(),
            'priority'=>Auth::user()->priority()->get(),
            'piccs'=>Auth::user()->piccs()->get(),
            'pmpin'=>Auth::user()->pmpin()->get(),
            'acno'=>Auth::user()->acno,
            'pono'=>Auth::user()->pono()->get(),
            'operation'=>Auth::user()->operation,
            'production'=>Auth::user()->production
        ])->setPaper($customPaper,'A4');

        return $pdf->download('moduleOne.pdf');
    }



    public function edit()
    {
        $id = Auth::id();
        $year = Auth::user()->year;

        $quarter = Auth::user()->quarter;
        $plant = Auth::user()->plant;
        $referencens = Auth::user()->reference_no;
        $aircon = Auth::user()->aircon;
        $gic = Auth::user()->gic;
        $dpno = Auth::user()->dpno()->get();
        $cncno = Auth::user()->cncno()->get();
        $denrid = Auth::user()->denrid;
        $transporterReg = Auth::user()->transporterReg;
        $tsdreg = Auth::user()->tsdreg;
        $ccoreg = Auth::user()->ccoreg()->get();
        $import = Auth::user()->import()->get();
        $permit = Auth::user()->permit;
        $smallquan = Auth::user()->smallquan()->get();
        $priority = Auth::user()->priority()->get();
        $piccs = Auth::user()->piccs()->get();
        $pmpin = Auth::user()->pmpin()->get();
        $acno = Auth::user()->acno;
        $pono = Auth::user()->pono()->get();
        $operation = Auth::user()->operation;
        $production = Auth::user()->production;
        $uploads = Upload::get();
        $users = User::find($id);
        $upload = Upload::get();
        $addfacility = Auth::user()->addfacility()->get();

        return view('module.updatemoduleOne',
            compact('users',
                'year',
                'quarter',
                'plant',
                'referencens',
                'dpno',
                'gic',
                'aircon',
                'cncno',
                'denrid',
                'transporterReg',
                'tsdreg',
                'ccoreg',
                'import',
                'permit',
                'smallquan',
                'priority',
                'piccs',
                'pmpin',
                'acno',
                'pono',
                'operation',
                'production',
                'uploads',
                'addfacility',
                'upload',
            ));
    }
    public function update(Request $request, $id)
    {
// updated value
        $year = Yeardd::where('userid', $id)->first();
        $year->year = $request->input('year');
        $year->update();


        $upload = Upload::where('userid', $id)->first();
        $files = $request->file('file');

        if ($files) {
            $userId = Auth::user()->id;
            $reference = Auth::user()->reference_no->first(); // Fetch reference number of authenticated user
            $refNo = $reference->reference_number; // Extract the reference number from the fetched object
            $userFolder = $userId . '/' . $refNo . '/moduleOneAttachment'; // Set user folder path

            foreach ($files as $file) {
                $name = $file->getClientOriginalName();

                if ($file->storeAs($userFolder, $name,'public')) {
                    $upload = new Upload();
                    $upload->file = $name;
                    $upload->userid = $userId;
                    $upload->save();
                }
            }
        }


//end of update upload file


        $quarter = Quarterdd::where('userid', $id)->first();
        $quarter->quarter = $request->input('quarter');
        $quarter->update();

        $plant = Plant::where('userid', $id)->first();
        $plant ->plantname = $request->input('plantname');
        $plant->update();
// end updated value
        $gic = Gic::where('userid', $id)->first();
        $gic->description = $request->input('description');
        $gic->update();


        $aircon = Aircon::where('userid', $id)->first();
        $aircon->permit = $request->input('ACPermit');
        $aircon->dateIssued = $request->input('ACIssued');
        $aircon->dateExpired = $request->input('ACExpire');
        $aircon->update();


        $denrid = Denrid::where('userid', $id)->first();
        $denrid->permit = $request->input('DENRpermit');
        $denrid->dateIssued = $request->input('DENRdateIssued');
        $denrid->dateExpired = $request->input('DENRdateExpired');
        $denrid->update();

        $transporterReg = TransporterReg::where('userid', $id)->first();
        $transporterReg->permit = $request->input('Transportpermit');
        $transporterReg->dateIssued = $request->input('TransportdateIssued');
        $transporterReg->dateExpired = $request->input('TransportdateExpired');
        $transporterReg->update();

        $tsdreg = Tsdreg::where('userid', $id)->first();
        $tsdreg->permit = $request->input('TSDpermit');
        $tsdreg->dateIssued = $request->input('TSDdateIssued');
        $tsdreg->dateExpired = $request->input('TSDdateExpired');
        $tsdreg->update();

        $acno = Acno::where('userid', $id)->first();
        $acno->permit = $request->input('ACNOPermit');
        $acno->dateIssued = $request->input('ACNOIssued');
        $acno->dateExpired = $request->input('ACNOExpired');
        $acno->update();

        $operation = Operation::where('userid', $id)->first();
        $operation->aveOPhours = $request->input('aveOPhours');
        $operation->aveOPdays = $request->input('aveOPdays');
        $operation->aveOPshift = $request->input('aveOPshift');
        $operation->maxOPhours = $request->input('maxOPhours');
        $operation->maxOPdays = $request->input('maxOPdays');
        $operation->maxOPshift = $request->input('maxOPshift');
        $operation->update();

        $production = Production::where('userid', $id)->first();
        $production->aveProduction = $request->input('aveProduction');
        $production->totalOutput = $request->input('totalOutput');
        $production->totalConsumption = $request->input('totalConsumption');
        $production->totalElectric = $request->input('totalElectric');
        $production->save();



        $dpno = $request->input('dpno');
        $userId = Auth::user()->id;

        // Get all records for the current user
        $DBdpno = Dpno::where('userid', $userId)->get();

        // Loop through all records and update each one
        foreach ($DBdpno as $index => $record) {
            $record->permit = $dpno[$index*3];
            $record->dateIssued = $dpno[$index*3+1];
            $record->dateExpired = $dpno[$index*3+2];
            $record->update();
        }

        // Create a new record for any remaining data
        for ($x = count($DBdpno)*3; $x < count($dpno); $x += 3) {
            $newRecord = new Dpno();
            $newRecord->userid = $userId;
            $newRecord->permit = $dpno[$x];
            $newRecord->dateIssued = $dpno[$x+1];
            $newRecord->dateExpired = $dpno[$x+2];
            $newRecord->save();
        }


        $import = $request->input('import');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBimport = Import::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBimport as $index => $record) {
            $record->permit = $import[$index*3];
            $record->dateIssued = $import[$index*3+1];
            $record->dateExpired = $import[$index*3+2];
            $record->update();
        }

        // Create a new record for any remaining data
        for ($x = count($DBimport)*3; $x < count($import); $x += 3) {
            $newRecord = new Import();
            $newRecord->userid = $userId;
            $newRecord->permit = $dpno[$x];
            $newRecord->dateIssued = $import[$x+1];
            $newRecord->dateExpired = $import[$x+2];
            $newRecord->save();
        }

//CCOREG STARTS
        $ccoreg = $request->input('ccoreg');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBccoreg = Ccoreg::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBccoreg as $index => $record) {
            $record->permit = $ccoreg[$index*3];
            $record->dateIssued = $ccoreg[$index*3+1];
            $record->dateExpired = $ccoreg[$index*3+2];
            $record->update();
        }
        // Create a new record for any remaining data
        for ($x = count($DBccoreg)*3; $x < count($ccoreg); $x += 3) {
            $newRecord = new Ccoreg();
            $newRecord->userid = $userId;
            $newRecord->permit = $ccoreg[$x];
            $newRecord->dateIssued = $ccoreg[$x+1];
            $newRecord->dateExpired = $ccoreg[$x+2];
            $newRecord->save();
        }
//END

        $cncno = $request->input('cncno');
        $userId = Auth::user()->id;
// Get all records for the current user
        $DBcncno = Cncno::where('userid', $userId)->get();
// Loop through all records and update each one
        foreach ($DBcncno as $index => $record) {
            $record->permit = $cncno[$index*3];
            $record->dateIssued = $cncno[$index*3+1];
            $record->dateExpired = $cncno[$index*3+2];
            $record->update();
        }
// Create a new record for any remaining data
        for ($x = count($DBcncno)*3; $x < count($cncno); $x += 3) {
            $newRecord = new Cncno();
            $newRecord->userid = $userId;
            $newRecord->permit = $cncno[$x];
            $newRecord->dateIssued = $cncno[$x+1];
            $newRecord->dateExpired = $cncno[$x+2];
            $newRecord->save();
        }


        $permit = $request->input('permit');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBpermit = Permmit::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBpermit as $index => $record) {
            $record->permit = $permit[$index*3];
            $record->dateIssued = $permit[$index*3+1];
            $record->dateExpired = $permit[$index*3+2];
            $record->update();
        }
        // Create a new record for any remaining data
        for ($x = count($DBpermit)*3; $x < count($permit); $x += 3) {
            $newRecord = new Permmit();
            $newRecord->userid = $userId;
            $newRecord->permit = $permit[$x];
            $newRecord->dateIssued = $permit[$x+1];
            $newRecord->dateExpired = $permit[$x+2];
            $newRecord->save();
        }


        $smallquan = $request->input('smallquan');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBsmallquan = Smallquan::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBsmallquan as $index => $record) {
            $record->permit = $smallquan[$index*3];
            $record->dateIssued = $smallquan[$index*3+1];
            $record->dateExpired = $smallquan[$index*3+2];
            $record->update();
        }
        // Create a new record for any remaining data
        for ($x = count($DBsmallquan)*3; $x < count($smallquan); $x += 3) {
            $newRecord = new Smallquan();
            $newRecord->userid = $userId;
            $newRecord->permit = $smallquan[$x];
            $newRecord->dateIssued = $smallquan[$x+1];
            $newRecord->dateExpired = $smallquan[$x+2];
            $newRecord->save();
        }


        $priority = $request->input('priority');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBpriority = Priority::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBpriority as $index => $record) {
            $record->permit = $priority[$index*3];
            $record->dateIssued = $priority[$index*3+1];
            $record->dateExpired = $priority[$index*3+2];
            $record->update();
        }
        // Create a new record for any remaining data
        for ($x = count($DBpriority)*3; $x < count($priority); $x += 3) {
            $newRecord = new Priority();
            $newRecord->userid = $userId;
            $newRecord->permit = $priority[$x];
            $newRecord->dateIssued = $priority[$x+1];
            $newRecord->dateExpired = $priority[$x+2];
            $newRecord->save();
        }


        $piccs = $request->input('piccs');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBpiccs = Piccs::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBpiccs as $index => $record) {
            $record->permit = $piccs[$index*3];
            $record->dateIssued = $piccs[$index*3+1];
            $record->dateExpired = $piccs[$index*3+2];
            $record->update();
        }
        // Create a new record for any remaining data
        for ($x = count($DBpiccs)*3; $x < count($piccs); $x += 3) {
            $newRecord = new Piccs();
            $newRecord->userid = $userId;
            $newRecord->permit = $piccs[$x];
            $newRecord->dateIssued = $piccs[$x+1];
            $newRecord->dateExpired = $piccs[$x+2];
            $newRecord->save();
        }


        $pmpin = $request->input('pmpin');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBpmpin = Pmpin::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBpmpin as $index => $record) {
            $record->permit = $pmpin[$index*3];
            $record->dateIssued = $pmpin[$index*3+1];
            $record->dateExpired = $pmpin[$index*3+2];
            $record->update();
        }
        // Create a new record for any remaining data
        for ($x = count($DBpmpin)*3; $x < count($pmpin); $x += 3) {
            $newRecord = new Pmpin();
            $newRecord->userid = $userId;
            $newRecord->permit = $pmpin[$x];
            $newRecord->dateIssued = $pmpin[$x+1];
            $newRecord->dateExpired = $pmpin[$x+2];
            $newRecord->save();
        }


        $pono = $request->input('pono');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBpono = Pono::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBpono as $index => $record) {
            $record->permit = $pono[$index*3];
            $record->dateIssued = $pono[$index*3+1];
            $record->dateExpired = $pono[$index*3+2];
            $record->update();
        }
        // Create a new record for any remaining data
        for ($x = count($DBpono)*3; $x < count($pono); $x += 3) {
            $newRecord = new Pono();
            $newRecord->userid = $userId;
            $newRecord->permit = $pono[$x];
            $newRecord->dateIssued = $pono[$x+1];
            $newRecord->dateExpired = $pono[$x+2];
            $newRecord->save();
        }
        return redirect()->back();

    }

    public function store(Request $request)
    {
        $dateIssued = $request->input('date_issued');
        $expiryDate = $request->input('expiry_date');

        if (empty($dateIssued)) {
            $dateIssued = Carbon::parse('2001-01-01');
        } else {
            $dateIssued = Carbon::createFromFormat('Y-m-d', $dateIssued);
        }

        if (empty($expiryDate)) {
            $expiryDate = null;
        } else {
            $expiryDate = Carbon::createFromFormat('Y-m-d', $expiryDate);
        }

        // Add a limit of 30 days after the date issued
        $limitDate = $dateIssued->copy()->addDays();

        if ($expiryDate && $expiryDate->gt($limitDate)) {
            return back()->withErrors(['expiry_date' => 'Expiry date cannot go beyond 30 days after the date issued']);
        }

        if ($dateIssued->gt($expiryDate)) {
            return back()->withErrors(['date_issued' => 'Date issued cannot go beyond the expiry date']);
        }

        // Save to the database
        // $item = new Item;
        // $item->date_issued = $dateIssued;
        // $item->expiry_date = $expiryDate;
        // $item->save();

        return redirect()->route('module.moduleOne');
    }


}
