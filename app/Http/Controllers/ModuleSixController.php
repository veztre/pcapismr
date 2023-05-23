<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\AccidentRecord;
use App\Models\Oaemployee;
use App\Models\Oaemployee1;
use App\Models\Oattachment;
use App\Models\Oaupload;
use App\Models\PersonelStaff;
use App\Models\referencen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\Validator;


class ModuleSixController extends Controller
{
    public function index(){
        $accident_records = Auth::user()->accident_records();
        $personel_staff = Auth::user()->personel_staff();
        $reference= Auth::user()->reference_no()->first();
        $oaupload = Oaupload::all();
        $oattachment = Auth::user()->oattachment();
        $oaemployee = Auth::user()->oaemployee();
        $oaemployee1 = Auth::user()->oaemployee1();


        return view('module.moduleSix')
            ->with ([
                'accident_records'=>$accident_records,
                'personel_staff'=>$personel_staff,
                'referencen'=>$reference->ref_no,
                'oaupload'=>$oaupload,
                'oattachment'=>$oattachment,
                'oaemployee'=>$oaemployee,
                'oaemployee1'=>$oaemployee1,

            ]);
    }

    public function save(Request $request){

        $accident_records = $request->input('accident_records');
        for ($x=0; $x<count($accident_records); $x+=5 ){
            $DBaccident_records = new AccidentRecord();
            $DBaccident_records->userid = Auth::user()->id;
            $DBaccident_records->date = date('Y-m-d', strtotime ($accident_records[$x]));
            $DBaccident_records->Area_Location = $accident_records[$x+1];
            $DBaccident_records->Findings_and_Obeservations = $accident_records[$x+2];
            $DBaccident_records->Action_Taken = $accident_records[$x+3];
            $DBaccident_records->Remarks = $accident_records[$x+4];

            $DBaccident_records->save();

        }
        $personel_staff = $request->input('personel_staff');
        for ($x=0; $x<count($personel_staff); $x+=3 ){
            $DBpersonel_staff = new PersonelStaff();
            $DBpersonel_staff->userid = Auth::user()->id;
            $DBpersonel_staff->date =  date('Y-m-d', strtotime ($personel_staff[$x]));
            $DBpersonel_staff->Course_Training_Description = $personel_staff[$x+1];
            $DBpersonel_staff->no_of_Personnel_Trained = $personel_staff[$x+2];

            $DBpersonel_staff->save();
        }

        $oattachment  = new Oattachment();
        $oattachment->userid= Auth::user()->id;
        $oattachment->doneThis = $request->input('date');
        $oattachment->In = $request->input('In');
        $oattachment->name_signature_of_PCO = $request->input('nameSignature');
        $oattachment->Name_Signature_of_CEO_Managing_Head = $request->input('CEOManagingHead');
        $oattachment->SUBSCRIBED_AND_SWORN = $request->input('subsAndSworn');
        $oattachment->dayOf = $request->input('dayOf');

        $oattachment->save();

        $oaemployee  = new Oaemployee();
        $oaemployee->userid= Auth::user()->id;
        $oaemployee->name = $request->input('nameEmployee');
        $oaemployee->id_no = $request->input('id_no_employee');
        $oaemployee->IssuedAt = $request->input('IssueAtEmployee');
        $oaemployee->IssuedOn = $request->input('IssueOnEmployee');

        $oaemployee->save();

        $oaemployee1  = new Oaemployee1();
        $oaemployee1->userid= Auth::user()->id;
        $oaemployee1->name1 = $request->input('nameEmployee1');
        $oaemployee1->id_no1 = $request->input('id_no_employee1');
        $oaemployee1->IssuedAt1 = $request->input('IssueAtEmployee1');
        $oaemployee1->IssuedOn1 = $request->input('IssueOnEmployee1');

        $oaemployee1->save();

        if ($file = $request->file('file')) {
            $name = $file->getClientOriginalName();
            $userId = Auth::user()->id;
            $reference = Auth::user()->reference_no()->first(); // Fetch reference number of authenticated user
            $refNo = $reference->reference_number; // Extract the reference number from the fetched object

            // Build the user folder path
            $userFolder = $userId . '/' . $refNo . '/moduleSixAttachment';

            // Build the file path
            $filePath = $userFolder . '/' . $name;

            if ($file->move($userFolder, $name)) {
                $upload = new Oaupload();
                $upload->file = $name;
                $upload->userid = $userId;
                $upload->save();
            }
        }



        return redirect()->back();
    }



    public function edit()
    {

        $id = Auth::id();
        $users = User::find($id);
        $referencens = Auth::user()->reference_no()->get();
        $accident_records = Auth::user()->accident_records()->get();
        $personel_staff = Auth::user()->personel_staff()->get();
        $oattachment = Auth::user()->oattachment()->get();
        $oaemployee = Auth::user()->oaemployee()->get();
        $oaemployee1 =Auth::user()->oaemployee1()->get();
        $oaupload = Oaupload::get();


        return view('module.updatemoduleSix',compact(
            'accident_records',
            'personel_staff',
            'oattachment',
            'oaemployee',
            'oaemployee1',
            'users',
            'referencens',
            'oaupload',

        ));
    }


    public function update(Request $request, $id)
    {


        // Upload file
        $upload = Oaupload::where('userid', $id)->first();
        $file = $request->file('file');

        if ($file) {
            $name = $file->getClientOriginalName();
            $userId = Auth::user()->id;
            $reference = Auth::user()->reference_no()->first(); // Fetch reference number of authenticated user
            $refNo = $reference->reference_number; // Extract the reference number from the fetched object

            // Build the user folder path
            $userFolder = $userId . '/' . $refNo . '/moduleSixAttachment';

            // Build the file path
            $filePath = $userFolder . '/' . $name;

            if ($file->move($userFolder, $name)) {
                if ($upload) {
                    // Update existing upload record
                    $upload->file = $name;
                    $upload->userid = $userId;
                    $upload->save();
                } else {
                    // Create new upload record
                    $upload = new Oaupload();
                    $upload->file = $name;
                    $upload->userid = $userId;
                    $upload->save();
                }
            }
        }

//end of update upload file


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

    public function pdf(){



        $accident_records = Auth::user()->accident_records()->get(); //get database
        $personel_staff = Auth::user()->personel_staff()->get();
        $oattachment = Auth::user()->oattachment()->get();
        $oaemployee = Auth::user()->oaemployee()->get();
        $oaemployee1 =Auth::user()->oaemployee1()->get();

        $customPaper = array(0,0,800.00,800.90);
        $pdf = PDF::loadView('module.pdf6',[
            'accident_records'=>$accident_records,
            'personel_staff'=>$personel_staff,
            'oattachment'=>$oattachment,
            'oaemployee' => $oaemployee,
            'oaemployee1'=>$oaemployee1


        ])->setPaper($customPaper,'A4');  //hello.blade.php (design of pdf)
        return $pdf->download('moduleSix.pdf'); //pdf name download

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
        return redirect('moduleSix');
    }



}


