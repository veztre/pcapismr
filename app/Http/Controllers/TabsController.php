<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
use PDF;
use Illuminate\Support\Carbon;
use League\CommonMark\Reference\Reference;
use App\Models\Addfacility;
use App\Models\Plant;

/*mod2*/
use App\Models\Disposal;
use App\Models\HWDetails;
use App\Models\HwGeneration;
use App\Models\Osisa;
use App\Models\Storage;
use App\Models\Transporter;
use App\Models\Treater;

/*mod3*/
use App\Models\AdministrativeCost;
use App\Models\CostOfChemical;
use App\Models\CostOfNew;
use App\Models\CostOfOperating;
use App\Models\DischargeLocation;
use App\Models\DreportofWaste;
use App\Models\DreportofWaste_parameter;
use App\Models\Drowcfop;
use App\Models\Drowcfop1;
use App\Models\NewInvestment;
use App\Models\PersonEmployed;
use App\Models\PersonEmployedCost;
use App\Models\UtilityCost;
use App\Models\WaterPolutionData;

/*mod4*/
use App\Models\Administrative_and_Overhead_Costs;
use App\Models\Cost_of_improvement_of_modification;
use App\Models\Cost_of_operating_in_house_laboratory;
use App\Models\Cost_of_person_employed;
use App\Models\DetailParameter;
use App\Models\DetailParameterValue;
use App\Models\DetailReport;
use App\Models\Improvement_or_modification;
use App\Models\Summary1;
use App\Models\Summary2;
use App\Models\Summary3;
use App\Models\Total_Consumption_of_Electricity;
use App\Models\Total_Consumption_of_Water;
use App\Models\Total_Cost_of_Chemicals_used;

/*mod5*/
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
use App\Models\AAQmonitoring_parameter;


/*mod6*/
use App\Models\AccidentRecord;
use App\Models\Oaemployee;
use App\Models\Oaemployee1;
use App\Models\Oattachment;
use App\Models\Oaupload;
use App\Models\PersonelStaff;
use Illuminate\Support\Facades\Validator;


class TabsController extends Controller
{
    //

/*Module1 tab start*/
    public function edit($id)
    {

        $year = Auth::user()->year()->get();
        $quarter = Auth::user()->quarter()->get();
        $plant = Auth::user()->plant()->get();
        $referencens = Auth::user()->reference_no()->get();
        $aircon = Auth::user()->aircon()->get();
        $gic = Auth::user()->gic()->get();
        $dpno = Auth::user()->dpno()->get();
        $cncno = Auth::user()->cncno()->get();
        $denrid = Auth::user()->denrid()->get();
        $transporterReg = Auth::user()->transporterReg()->get();
        $tsdreg = Auth::user()->tsdreg()->get();
        $ccoreg = Auth::user()->ccoreg()->get();
        $import = Auth::user()->import()->get();
        $permit = Auth::user()->permit()->get();
        $smallquan = Auth::user()->smallquan()->get();
        $priority = Auth::user()->priority()->get();
        $piccs = Auth::user()->piccs()->get();
        $pmpin = Auth::user()->pmpin()->get();
        $acno = Auth::user()->acno()->get();
        $pono = Auth::user()->pono()->get();
        $operation = Auth::user()->operation()->get();
        $production = Auth::user()->production()->get();
        $uploads = Upload::get();
        $users = User::find($id);
        $addfacility = Addfacility::get();
        return view('module.tabsupdatemoduleOne',
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



            ));
    }
        public function update(Request $request, $id)
    {


// updated value
        $year = Yeardd::where('userid', $id)->first();
        $year->year = $request->input('year');
        $year->update();


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
    /*Module1 tab end*/


    /*Module2 tab start*/
    public function edit2($id){

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

    public function update2(Request $request, $id)
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
    /*Module2 tab end*/

    /*Module3 tab start*/
    public function edit3($id){

        $waterpolutiondata = Auth::user()->waterpolutiondata()->get();
        $personEmployed = Auth::user()->personEmployed()->get();
        $personEmployedCost = Auth::user()->personEmployedCost()->get();
        $costofchemical = Auth::user()->costofchemical()->get();
        $utilitycost = Auth::user()->utilitycost()->get();
        $administrativecosts = Auth::user()->administrativecosts()->get();
        $costofoperating = Auth::user()->costofoperating()->get();
        $newinvestment = Auth::user()->newinvestment()->get();
        $costofnew = Auth::user()->costofnew()->get();
        $dischargeLocation = Auth::user()->dischargeLocation()->get();
        $dreportofwaste = Auth::user()->dreportofwaste()->get();
        $drowcfop = Auth::user()->drowcfop()->get();
        $drowcfop1 = Auth::user()->drowcfop1()->get();
        $dreportofwaste_parameter = Auth::user()->dreportofwaste_parameter()->get();

        $referencens = Referencen::get();
        $users = User::find($id);
        return view ('/module.updatemoduleThree',
            compact('users',
                'referencens',
                'waterpolutiondata',
                'personEmployed',
                'personEmployedCost',
                'costofchemical',
                'utilitycost',
                'administrativecosts',
                'costofoperating',
                'newinvestment',
                'costofnew',
                'dischargeLocation',
                'dreportofwaste',
                'drowcfop',
                'drowcfop1',
                'dreportofwaste_parameter',
            ));

    }

    public function update3(Request $request, $id){

        $waterpolutiondata = WaterPolutionData::where('userid', $id)->first();
        $waterpolutiondata->Domestic_wastewater = $request->input('domwaste');
        $waterpolutiondata->Cooling_water = $request->input('coolingw');
        $waterpolutiondata->Waste_water_equipment = $request->input('wequip');
        $waterpolutiondata->Processs_wastewater = $request->input('processwaste');
        $waterpolutiondata->others_n = $request->input('othern');
        $waterpolutiondata->others_m = $request->input('othercm');
        $waterpolutiondata->Waste_water_floor = $request->input('wwfloor');
        $waterpolutiondata->update();

        $personEmployed = PersonEmployed::where('userid', $id)->first();
        $personEmployed->Month_1 = $request->input('pemonth1');
        $personEmployed->Month_2 = $request->input('pemonth2');
        $personEmployed->Month_3 = $request->input('pemonth3');

        $personEmployed->update();

        $personEmployedCost = PersonEmployedCost::where('userid', $id)->first();
        $personEmployedCost->Month_1 = $request->input('pecmonth1');
        $personEmployedCost->Month_2 = $request->input('pecmonth2');
        $personEmployedCost->Month_3 = $request->input('pecmonth3');

        $personEmployedCost->update();

        $costofchemical = CostOfChemical::where('userid', $id)->first();
        $costofchemical->Month_1 = $request->input('cocw1');
        $costofchemical->Month_2 = $request->input('cocw2');
        $costofchemical->Month_3 = $request->input('cocw3');

        $costofchemical->update();

        $utilitycost = UtilityCost::where('userid', $id)->first();
        $utilitycost->Month_1 = $request->input('ucw1');
        $utilitycost->Month_2 = $request->input('ucw2');
        $utilitycost->Month_3 = $request->input('ucw3');

        $utilitycost->update();

        $administrativecosts = AdministrativeCost::where('userid', $id)->first();
        $administrativecosts->Month_1 = $request->input('aoc1');
        $administrativecosts->Month_2 = $request->input('aoc2');
        $administrativecosts->Month_3 = $request->input('aoc3');

        $administrativecosts->update();

        $costofoperating = CostOfOperating::where('userid', $id)->first();
        $costofoperating->Month_1 = $request->input('colab1');
        $costofoperating->Month_2 = $request->input('colab2');
        $costofoperating->Month_3 = $request->input('colab3');

        $costofoperating->update();

        $newinvestment = NewInvestment::where('userid', $id)->first();
        $newinvestment->Month_1 = $request->input('nai1');
        $newinvestment->Month_2 = $request->input('nai2');
        $newinvestment->Month_3 = $request->input('nai3');

        $newinvestment->update();

        $costofnew = CostOfNew::where('userid', $id)->first();
        $costofnew->Month_1 = $request->input('cnai1');
        $costofnew->Month_2 = $request->input('cnai2');
        $costofnew->Month_3 = $request->input('cnai3');

        $costofnew->update();



        $drowcfop = Drowcfop::where('userid', $id)->first();
        $drowcfop->name1 = $request->input('name1');
        $drowcfop->name2 = $request->input('name2');
        $drowcfop->name3 = $request->input('name3');
        $drowcfop->name4 = $request->input('name4');
        $drowcfop->name5 = $request->input('name5');
        $drowcfop->name6 = $request->input('name6');
        $drowcfop->name7 = $request->input('name7');
        $drowcfop->unit1 = $request->input('unit1');
        $drowcfop->unit2 = $request->input('unit2');
        $drowcfop->unit3 = $request->input('unit3');
        $drowcfop->unit4 = $request->input('unit4');
        $drowcfop->unit5 = $request->input('unit5');
        $drowcfop->unit6 = $request->input('unit6');
        $drowcfop->unit7 = $request->input('unit7');


        $drowcfop->update();


        $dischargeLocation = $request->input('dischargeLocation');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBdischargeLocation = DischargeLocation::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBdischargeLocation as $index => $record) {
            $record->Outlet_Number = $dischargeLocation[$index*3];
            $record->Location_of_Outlet = $dischargeLocation[$index*3+1];
            $record->Name_of_Receiving_water_body = $dischargeLocation[$index*3+2];
            $record->update();
        }

        // Create a new record for any remaining data
        for ($x = count($DBdischargeLocation)*3; $x < count($dischargeLocation); $x += 3) {
            $newRecord = new DischargeLocation();
            $newRecord->userid = $userId;
            $newRecord->Outlet_Number = $dischargeLocation[$x];
            $newRecord->Location_of_Outlet = $dischargeLocation[$x+1];
            $newRecord->Name_of_Receiving_water_body = $dischargeLocation[$x+2];
            $newRecord->save();
        }


        $dreportofwaste = $request->input('dreportofwaste');
        $userId = Auth::user()->id;

        // Get all records for the current user
        $DBdreportofwaste = DreportofWaste::where('userid', $userId)->get();

        // Loop through all records and update each one
        foreach ($DBdreportofwaste as $index => $record) {
            $record->Outlet_No = $dreportofwaste[$index*10];
            $record->date = $dreportofwaste[$index*10+1];
            $record->Effluent_Flow_Rate = $dreportofwaste[$index*9+2];
            $record->BOD_mg_L = $dreportofwaste[$index*10+3];
            $record->TSS_mg_L = $dreportofwaste[$index*10+4];
            $record->Color = $dreportofwaste[$index*10+5];
            $record->pH = $dreportofwaste[$index*10+6];
            $record->Oil_Grease_mg_L = $dreportofwaste[$index*10+7];
            $record->Temp_Rise = $dreportofwaste[$index*10+8];
            /*new parameter*/
            $record->Add_parameter = $dreportofwaste[$index*10+9];
            $record->update();
        }


        for ($x = count($DBdreportofwaste)*9; $x < count($dreportofwaste); $x += 10) {
            $newRecord = new DreportofWaste();
            $newRecord->userid = $userId;
            $newRecord->Outlet_No = $dreportofwaste[$x];
            $newRecord->date = $dreportofwaste[$x+1];
            $newRecord->Effluent_Flow_Rate = $dreportofwaste[$x+2];
            $newRecord->BOD_mg_L = $dreportofwaste[$x+3];
            $newRecord->TSS_mg_L = $dreportofwaste[$x+4];
            $newRecord->Color = $dreportofwaste[$x+5];
            $newRecord->pH = $dreportofwaste[$x+6];
            $newRecord->Oil_Grease_mg_L = $dreportofwaste[$x+7];
            $newRecord->Temp_Rise = $dreportofwaste[$x+8];
            /*new parameter*/
            $newRecord->Add_parameter = $dreportofwaste[$x+9];
            $newRecord->save();
        }


        $drowcfop1 = $request->input('drowcfop1');
        $userId = Auth::user()->id;

        // Get all records for the current user
        $DBdrowcfop1 = Drowcfop1::where('userid', $userId)->get();

        // Loop through all records and update each one
        foreach ($DBdrowcfop1 as $index => $record) {
            $record->Outlet_No = $drowcfop1[$index*10];
            $record->Date = $drowcfop1[$index*10+1];
            $record->Effluent_Flow_Rate_m3_day = $drowcfop1[$index*10+2];
            $record->value1 = $drowcfop1[$index*10+3];
            $record->value2 = $drowcfop1[$index*10+4];
            $record->value3 = $drowcfop1[$index*10+5];
            $record->value4 = $drowcfop1[$index*10+6];
            $record->value5 = $drowcfop1[$index*10+7];
            $record->value6 = $drowcfop1[$index*10+8];
            $record->value7 = $drowcfop1[$index*10+9];
            $record->update();
        }


        for ($x = count($DBdrowcfop1)*10; $x < count($drowcfop1); $x += 10) {
            $newRecord = new Drowcfop1();
            $newRecord->userid = $userId;
            $newRecord->Outlet_No = $drowcfop1[$x];
            $newRecord->Date = $drowcfop1[$x+1];
            $newRecord->Effluent_Flow_Rate_m3_day = $drowcfop1[$x+2];
            $newRecord->value1 = $drowcfop1[$x+3];
            $newRecord->value2 = $drowcfop1[$x+4];
            $newRecord->value3 = $drowcfop1[$x+5];
            $newRecord->value4 = $drowcfop1[$x+6];
            $newRecord->value5 = $drowcfop1[$x+7];
            $newRecord->value6 = $drowcfop1[$x+8];
            $newRecord->value7 = $drowcfop1[$x+9];
            $newRecord->save();
        }



        return redirect()->back();

    }
    /*Module3 tab end*/

    /*Module4 tab start*/
    public function edit4($id){

        $summary1 = Auth::user()->summary1()->get();
        $summary2 = Auth::user()->summary2()->get();
        $summary3 = Auth::user()->summary3()->get();
        $cost_of_person_employed = Auth::user()->cost_of_person_employed()->get();
        $total_consumption_of_water = Auth::user()->total_consumption_of_water()->get();
        $total_consumption_of_electricity = Auth::user()->total_consumption_of_electricity()->get();
        $total_cost_of_chemicals_used = Auth::user()->total_cost_of_chemicals_used()->get();
        $administrative_and_overhead_costs = Auth::user()->administrative_and_overhead_costs()->get();
        $cost_of_operating_in_house_laboratory = Auth::user()->cost_of_operating_in_house_laboratory()->get();
        $improvement_or_modification = Auth::user()->improvement_or_modification()->get();
        $cost_of_improvement_of_modification = Auth::user()->cost_of_improvement_of_modification()->get();
        $detailreport = Auth::user()->detailreport()->get();
        $detail_parameter = Auth::user()->detail_parameter()->get();
        $detail_parameter_value = Auth::user()->detail_parameter_value()->get();

        $referencens= Referencen::get();
        $users = User::find($id);

        return view('module.updatemoduleFour',
            compact('users',
                'referencens',
                'summary1',
                'summary2',
                'summary3',
                'cost_of_person_employed',
                'total_consumption_of_water',
                'total_cost_of_chemicals_used',
                'total_consumption_of_electricity',
                'administrative_and_overhead_costs',
                'cost_of_operating_in_house_laboratory',
                'improvement_or_modification',
                'cost_of_improvement_of_modification',
                'detailreport',
                'detail_parameter',
                'detail_parameter_value',

            ));
    }
    public function update4(Request $request, $id){

        $summary1 = $request->input('summary1');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBsummary1 = Summary1::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBsummary1 as $index => $record) {
            $record->Process_Equipment = $summary1[$index*3];
            $record->Location = $summary1[$index*3+1];
            $record->no_of_hours_of_operation_for_the_quarter = $summary1[$index*3+2];

            $record->update();
        }
        for ($x = count($DBsummary1)*3; $x < count($summary1); $x += 3) {
            $newRecord = new Summary1();
            $newRecord->userid = $userId;
            $newRecord->Process_Equipment = $summary1[$x];
            $newRecord->Location = $summary1[$x+1];
            $newRecord->no_of_hours_of_operation_for_the_quarter = $summary1[$x+2];


            $newRecord->save();
        }
        $summary2 = $request->input('summary2');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBsummary2 = Summary2::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBsummary2 as $index => $record) {
            $record->Fuel_Burning_Equipment = $summary2[$index*7];
            $record->Rated_Capacity = $summary2[$index*7+1];
            $record->Location = $summary2[$index*7+2];
            $record->Fuel_Used = $summary2[$index*7+3];
            $record->Quantity_Consumed_for_the_quarter = $summary2[$index*7+4];
            $record->Unit_Consumed_for_the_quarter = $summary2[$index*7+5];
            $record->no_of_hours_of_operation_for_the_quarter = $summary2[$index*7+6];
            $record->update();
        }
        for ($x = count($DBsummary2)*7; $x < count($summary2); $x += 7) {
            $newRecord = new Summary2();
            $newRecord->userid = $userId;
            $newRecord->Fuel_Burning_Equipment = $summary2[$x];
            $newRecord->Rated_Capacity = $summary2[$x+1];
            $newRecord->Location = $summary2[$x+2];
            $newRecord->Fuel_Used = $summary2[$x+3];
            $newRecord->Quantity_Consumed_for_the_quarter = $summary2[$x+4];
            $newRecord->Unit_Consumed_for_the_quarter = $summary2[$x+5];
            $newRecord->no_of_hours_of_operation_for_the_quarter = $summary2[$x+6];
            $newRecord->save();
        }

        $summary3 = $request->input('summary3');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBsummary3 = Summary3::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBsummary3 as $index => $record) {
            $record->Pollution_Control_Facility = $summary3[$index*3];
            $record->Location = $summary3[$index*3+1];
            $record->no_of_hours_of_operation_for_the_quarter = $summary3[$index*3+2];

            $record->update();
        }
        for ($x = count($DBsummary3)*3; $x < count($summary3); $x += 3) {
            $newRecord = new Summary3();
            $newRecord->userid = $userId;
            $newRecord->Pollution_Control_Facility = $summary3[$x];
            $newRecord->Location = $summary3[$x+1];
            $newRecord->no_of_hours_of_operation_for_the_quarter = $summary3[$x+2];

            $newRecord->save();
        }

        $cost_of_person_employed = $request->input('cost_of_person_employed');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBcost_of_person_employed = Cost_of_person_employed::where('userid', $userId)->get();
        // Loop through all records and update each one

        foreach ($DBcost_of_person_employed as $index => $record) {
            $record->month1 = $cost_of_person_employed[$index*3];
            $record->month2 = $cost_of_person_employed[$index*3+1];
            $record->month3 = $cost_of_person_employed[$index*3+2];

            $record->update();
        }
        for ($x = count($DBcost_of_person_employed)*3; $x < count($cost_of_person_employed); $x += 3) {
            $newRecord = new Cost_of_person_employed();
            $newRecord->userid = $userId;
            $newRecord->month1 = $cost_of_person_employed[$x];
            $newRecord->month2 = $cost_of_person_employed[$x+1];
            $newRecord->month3 = $cost_of_person_employed[$x+2];
            $newRecord->save();
        }

        $total_consumption_of_water = $request->input('total_consumption_of_water');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBtotal_consumption_of_water = Total_Consumption_of_Water::where('userid', $userId)->get();
        // Loop through all records and update each one

        foreach ($DBtotal_consumption_of_water as $index => $record) {
            $record->month1 = $total_consumption_of_water[$index*3];
            $record->month2 = $total_consumption_of_water[$index*3+1];
            $record->month3 = $total_consumption_of_water[$index*3+2];

            $record->update();
        }
        for ($x = count($DBtotal_consumption_of_water)*3; $x < count($total_consumption_of_water); $x += 3) {
            $newRecord = new Cost_of_person_employed();
            $newRecord->userid = $userId;
            $newRecord->month1 = $total_consumption_of_water[$x];
            $newRecord->month2 = $total_consumption_of_water[$x+1];
            $newRecord->month3 = $total_consumption_of_water[$x+2];
            $newRecord->save();
        }

        $total_cost_of_chemicals_used = $request->input('total_cost_of_chemicals_used');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBtotal_cost_of_chemicals_used = Total_Cost_of_Chemicals_used::where('userid', $userId)->get();
        // Loop through all records and update each one

        foreach ($DBtotal_cost_of_chemicals_used as $index => $record) {
            $record->month1 = $total_cost_of_chemicals_used[$index*3];
            $record->month2 = $total_cost_of_chemicals_used[$index*3+1];
            $record->month3 = $total_cost_of_chemicals_used[$index*3+2];

            $record->update();
        }
        for ($x = count($DBtotal_cost_of_chemicals_used)*3; $x < count($total_cost_of_chemicals_used); $x += 3) {
            $newRecord = new Total_Cost_of_Chemicals_used();
            $newRecord->userid = $userId;
            $newRecord->month1 = $total_cost_of_chemicals_used[$x];
            $newRecord->month2 = $total_cost_of_chemicals_used[$x+1];
            $newRecord->month3 = $total_cost_of_chemicals_used[$x+2];
            $newRecord->save();
        }

        $total_consumption_of_electricity = $request->input('total_consumption_of_electricity');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBtotal_consumption_of_electricity = Total_Consumption_of_Electricity::where('userid', $userId)->get();
        // Loop through all records and update each one

        foreach ($DBtotal_consumption_of_electricity as $index => $record) {
            $record->month1 = $total_consumption_of_electricity[$index*3];
            $record->month2 = $total_consumption_of_electricity[$index*3+1];
            $record->month3 = $total_consumption_of_electricity[$index*3+2];

            $record->update();
        }
        for ($x = count($DBtotal_consumption_of_electricity)*3; $x < count($total_consumption_of_electricity); $x += 3) {
            $newRecord = new Total_Consumption_of_Electricity();
            $newRecord->userid = $userId;
            $newRecord->month1 = $total_consumption_of_electricity[$x];
            $newRecord->month2 = $total_consumption_of_electricity[$x+1];
            $newRecord->month3 = $total_consumption_of_electricity[$x+2];
            $newRecord->save();
        }

        $administrative_and_overhead_costs = $request->input('administrative_and_overhead_costs');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBadministrative_and_overhead_costs = Administrative_and_Overhead_Costs::where('userid', $userId)->get();
        // Loop through all records and update each one

        foreach ($DBadministrative_and_overhead_costs as $index => $record) {
            $record->month1 = $administrative_and_overhead_costs[$index*3];
            $record->month2 = $administrative_and_overhead_costs[$index*3+1];
            $record->month3 = $administrative_and_overhead_costs[$index*3+2];

            $record->update();
        }
        for ($x = count($DBadministrative_and_overhead_costs)*3; $x < count($administrative_and_overhead_costs); $x += 3) {
            $newRecord = new Administrative_and_Overhead_Costs();
            $newRecord->userid = $userId;
            $newRecord->month1 = $administrative_and_overhead_costs[$x];
            $newRecord->month2 = $administrative_and_overhead_costs[$x+1];
            $newRecord->month3 = $administrative_and_overhead_costs[$x+2];
            $newRecord->save();
        }

        $cost_of_operating_in_house_laboratory = $request->input('cost_of_operating_in_house_laboratory');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBcost_of_operating_in_house_laboratory = Cost_of_operating_in_house_laboratory::where('userid', $userId)->get();
        // Loop through all records and update each one

        foreach ($DBcost_of_operating_in_house_laboratory as $index => $record) {
            $record->month1 = $cost_of_operating_in_house_laboratory[$index*3];
            $record->month2 = $cost_of_operating_in_house_laboratory[$index*3+1];
            $record->month3 = $cost_of_operating_in_house_laboratory[$index*3+2];

            $record->update();
        }
        for ($x = count($DBcost_of_operating_in_house_laboratory)*3; $x < count($cost_of_operating_in_house_laboratory); $x += 3) {
            $newRecord = new Cost_of_operating_in_house_laboratory();
            $newRecord->userid = $userId;
            $newRecord->month1 = $cost_of_operating_in_house_laboratory[$x];
            $newRecord->month2 = $cost_of_operating_in_house_laboratory[$x+1];
            $newRecord->month3 = $cost_of_operating_in_house_laboratory[$x+2];
            $newRecord->save();
        }

        $improvement_or_modification = $request->input('improvement_or_modification');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBimprovement_or_modification = Improvement_or_modification::where('userid', $userId)->get();
        // Loop through all records and update each one

        foreach ($DBimprovement_or_modification as $index => $record) {
            $record->month1 = $improvement_or_modification[$index*3];
            $record->month2 = $improvement_or_modification[$index*3+1];
            $record->month3 = $improvement_or_modification[$index*3+2];

            $record->update();
        }
        for ($x = count($DBimprovement_or_modification)*3; $x < count($improvement_or_modification); $x += 3) {
            $newRecord = new Improvement_or_modification();
            $newRecord->userid = $userId;
            $newRecord->month1 = $improvement_or_modification[$x];
            $newRecord->month2 = $improvement_or_modification[$x+1];
            $newRecord->month3 = $improvement_or_modification[$x+2];
            $newRecord->save();
        }

        $cost_of_improvement_of_modification = $request->input('cost_of_improvement_of_modification');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBcost_of_improvement_of_modification = Cost_of_improvement_of_modification::where('userid', $userId)->get();
        // Loop through all records and update each one

        foreach ($DBcost_of_improvement_of_modification as $index => $record) {
            $record->month1 = $cost_of_improvement_of_modification[$index*3];
            $record->month2 = $cost_of_improvement_of_modification[$index*3+1];
            $record->month3 = $cost_of_improvement_of_modification[$index*3+2];

            $record->update();
        }
        for ($x = count($DBcost_of_improvement_of_modification)*3; $x < count($cost_of_improvement_of_modification); $x += 3) {
            $newRecord = new Cost_of_improvement_of_modification();
            $newRecord->userid = $userId;
            $newRecord->month1 = $cost_of_improvement_of_modification[$x];
            $newRecord->month2 = $cost_of_improvement_of_modification[$x+1];
            $newRecord->month3 = $cost_of_improvement_of_modification[$x+2];
            $newRecord->save();
        }

        $detailreport = $request->input('detailreport');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBdetailreport = DetailReport::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBdetailreport as $index => $record) {
            $record->FBE_No = $detailreport[$index*7];
            $record->Date = $detailreport[$index*7+1];
            $record->Flow_Rate_Ncm_day = $detailreport[$index*7+2];
            $record->CO_mg_Ncm = $detailreport[$index*7+3];
            $record->NOx_mg_Ncm = $detailreport[$index*7+4];
            $record->Particulates_mg_Ncm = $detailreport[$index*7+5];
            $record->SOx_mg_Ncm = $detailreport[$index*7+6];
            $record->update();
        }
        for ($x = count($DBdetailreport)*7; $x < count($detailreport); $x += 7) {
            $newRecord = new DetailReport();
            $newRecord->userid = $userId;
            $newRecord->FBE_No = $detailreport[$x];
            $newRecord->Date = $detailreport[$x+1];
            $newRecord->Flow_Rate_Ncm_day = $detailreport[$x+2];
            $newRecord->CO_mg_Ncm = $detailreport[$x+3];
            $newRecord->NOx_mg_Ncm = $detailreport[$x+4];
            $newRecord->Particulates_mg_Ncm = $detailreport[$x+5];
            $newRecord->SOx_mg_Ncm = $detailreport[$x+6];
            $newRecord->save();
        }

        $detail_parameter = DetailParameter::where('userid', $id)->first();
        $detail_parameter->parameter1 = $request->input('parameter1');
        $detail_parameter->parameter2 = $request->input('parameter2');
        $detail_parameter->parameter3 = $request->input('parameter3');
        $detail_parameter->update();

        $detail_parameter_value = $request->input('detail_parameter_value');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBdetail_parameter_value = DetailParameterValue::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBdetail_parameter_value as $index => $record) {
            $record->value_parameter1 = $detail_parameter_value[$index*3];
            $record->value_parameter2 = $detail_parameter_value[$index*3+1];
            $record->value_parameter3 = $detail_parameter_value[$index*3+2];

            $record->update();
        }
        for ($x = count($DBdetail_parameter_value)*3; $x < count($detail_parameter_value); $x += 3) {
            $newRecord = new DetailParameterValue();
            $newRecord->userid = $userId;
            $newRecord->value_parameter1 = $detail_parameter_value[$x];
            $newRecord->value_parameter2 = $detail_parameter_value[$x+1];
            $newRecord->value_parameter3 = $detail_parameter_value[$x+2];

            $newRecord->save();
        }



        return redirect()->back();
    }
        /*Module4 tab end*/

    /*Module5 tab start*/
    public function edit5($id){

        $users = User::find($id);
        $referencens= Auth::user()->reference_no()->get();
        $aaqmonitoring_parameter = Auth::user()->aaqmonitoring_parameter()->get();
        $aaqmonitoring = Auth::user()->aaqmonitoring()->get();
        $oecondition = Auth::user()->oecondition()->get();
        $oeconditionCount = $oecondition->count();
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
                'oeconditionCount',
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

    public function update5(Request $request, $id){

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
            $record->update();
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
            $record->update();
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

    /*Module5 tab end*/

    /*Module6 tab start*/
    public function edit6($id)
    {

        $users = User::find($id);
        $referencens = Auth::user()->reference_no()->get();
        $accident_records = Auth::user()->accident_records()->get();
        $personel_staff = Auth::user()->personel_staff()->get();
        $oattachment = Auth::user()->oattachment()->get();
        $oaemployee = Auth::user()->oaemployee()->get();
        $oaemployee1 =Auth::user()->oaemployee1()->get();


        return view('module.updatemoduleSix',compact(
            'accident_records',
            'personel_staff',
            'oattachment',
            'oaemployee',
            'oaemployee1',
            'users',
            'referencens',

        ));
    }

    public function update6(Request $request, $id)
    {



        $oattachment = Oattachment::where('userid', $id)->first();
        $oattachment->doneThis = $request->input('date');
        $oattachment->In = $request->input('In');
        $oattachment->name_signature_of_PCO = $request->input('nameSignature');
        $oattachment->Name_Signature_of_CEO_Managing_Head = $request->input('CEOManagingHead');
        $oattachment->SUBSCRIBED_AND_SWORN = $request->input('subsAndSworn');
        $oattachment->dayOf = $request->input('dayOf');

        // Convert the date string into a valid date-time format
        $dayOf = \DateTime::createFromFormat('Y-m-d', $oattachment->dayOf);



        $oattachment->update();


        $oaemployee = Oaemployee::where('userid', $id)->first();
        $oaemployee->name = $request->input('nameEmployee');
        $oaemployee->id_no = $request->input('id_no_employee');
        $oaemployee->IssuedAt = $request->input('IssueAtEmployee');
        $oaemployee->IssuedOn = $request->input('IssueOnEmployee');

        $oaemployee->update();

        $oaemployee1 = Oaemployee1::where('userid', $id)->first();
        $oaemployee1->name1 = $request->input('nameEmployee1');
        $oaemployee1->id_no1 = $request->input('id_no_employee1');
        $oaemployee1->IssuedAt1 = $request->input('IssueAtEmployee1');
        $oaemployee1->IssuedOn1 = $request->input('IssueOnEmployee1');

        $oaemployee1->update();

        $accident_records = $request->input('accident_records');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBaccident_records = AccidentRecord::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBaccident_records as $index => $record) {
            $record->date = $accident_records[$index*5];
            $record->Area_Location = $accident_records[$index*5+1];
            $record->Findings_and_Obeservations = $accident_records[$index*5+2];
            $record->Action_Taken = $accident_records[$index*5+3];
            $record->Remarks = $accident_records[$index*5+4];
            $record->update();
        }
        // Create a new record for any remaining data
        for ($x = count($DBaccident_records)*5; $x < count($accident_records); $x += 5) {
            $newRecord = new AccidentRecord();
            $newRecord->userid = $userId;
            $newRecord->date = $accident_records[$x];
            $newRecord->Area_Location = $accident_records[$x+1];
            $newRecord->Findings_and_Obeservations = $accident_records[$x+2];
            $newRecord->Action_Taken = $accident_records[$x+3];
            $newRecord->Remarks = $accident_records[$x+4];
            $newRecord->save();
        }

        $personel_staff = $request->input('personel_staff');
        $userId = Auth::user()->id;
        // Get all records for the current user
        $DBpersonel_staff = PersonelStaff::where('userid', $userId)->get();
        // Loop through all records and update each one
        foreach ($DBpersonel_staff as $index => $record) {
            $record->date = $personel_staff[$index*3];
            $record->Course_Training_Description = $personel_staff[$index*3+1];
            $record->no_of_Personnel_Trained = $personel_staff[$index*3+2];

            $record->update();
        }
        // Create a new record for any remaining data
        for ($x = count($DBpersonel_staff)*3; $x < count($personel_staff); $x += 3) {
            $newRecord = new PersonelStaff();
            $newRecord->userid = $userId;
            $newRecord->date = $personel_staff[$x];
            $newRecord->Course_Training_Description = $personel_staff[$x+1];
            $newRecord->no_of_Personnel_Trained = $personel_staff[$x+2];

            $newRecord->save();
        }

        return redirect()->back();

    }
    /*Module6 tab end*/
}
