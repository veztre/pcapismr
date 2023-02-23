<?php

namespace App\Http\Controllers;

use App\Models\Disposal;
use App\Models\HWDetails;
use App\Models\HwGeneration;
use App\Models\Osisa;
use App\Models\Storage;
use App\Models\Transporter;
use App\Models\Treater;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModuleTwoController extends Controller
{
    public function index(){
        $hwGeneration = HwGeneration::all();
        $hwDetails = HWDetails::all();
        $storage = Storage::all();
        $transporter = Transporter::all();
        $treater = Treater::all();
        $disposal = Disposal::all();
        $osisa = Osisa::all();

        return view('module.moduleTwo');
        -with(['hwGeneration'=>$hwGeneration,'hwDetails'=>$hwDetails,'storage'=>$storage,'trasporter'=>$transporter,
        'treater'=>$treater,'disposal'=>$disposal,'osisa'=>$osisa]);
    }

    public function save(Request $request){

        $hwGeneration = $request->input('hwGeneration');
        for ($x=0; $x<count($hwGeneration); $x+=8 ){
            $DBhwGeneration = new HwGeneration();
            $DBhwGeneration->traineeID = 1;
            $DBhwGeneration->username = Auth::user()->username;
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
                $DBhwDetails->username = Auth::user()->username;
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
                    $DBstorage->username = Auth::user()->username;
                    $DBstorage->name = $storage[$x];
                    $DBstorage->method = $storage[$x+1];
                    $DBstorage->save();
                }
                $transporter = $request->input('transporter');
                for ($x=0; $x<count($transporter); $x+=4){
                    $DBtransporter = new Transporter();
                    $DBtransporter->username = Auth::user()->username;
                    $DBtransporter->transpo_id = $transporter[$x];
                    $DBtransporter->name = $transporter[$x+1];
                    $DBtransporter->method = $transporter[$x+2];
                    $DBtransporter->date = $transporter[$x+3];
                    $DBtransporter->save();
                }
                $treater = $request->input('treater');
                for ($x=0; $x<count($treater); $x+=4){
                    $DBtreater = new Treater();
                    $DBtreater->username = Auth::user()->username;
                    $DBtreater->treater_id = $treater[$x];
                    $DBtreater->name = $treater[$x+1];
                    $DBtreater->method = $treater[$x+2];
                    $DBtreater->date = $treater[$x+3];
                    $DBtreater->save();
                }
                $disposal = $request->input('disposal');
                for ($x=0; $x<count($disposal); $x+=4){
                    $DBdisposal = new Disposal();
                    $DBdisposal->username = Auth::user()->username;
                    $DBdisposal->disposal_id = $disposal[$x];
                    $DBdisposal->name = $disposal[$x+1];
                    $DBdisposal->method = $disposal[$x+2];
                    $DBdisposal->date = $disposal[$x+3];
                    $DBdisposal->save();
                }

                $osisa = $request->input('osisa');
                for ($x=0; $x<count($disposal); $x+=4){
                    $DBosisa = new Osisa();
                    $DBosisa->username = Auth::user()->username;
                    $DBosisa->DateConducted = $osisa[$x];
                    $DBosisa->PremisesAreaInspected = $osisa[$x+1];
                    $DBosisa->FindingsAndObservations = $osisa[$x+2];
                    $DBosisa->CorrectiveActionsTaken = $osisa[$x+3];
                    $DBosisa->save();
                }


            return view('module.moduleThree');
    }

    public function pdf (){



        $hwGeneration = HwGeneration::get();
        $hwDetails = HWDetails::get();
        $storage = Storage::get();
        $transporter = Transporter::get();
        $treater = Treater::get();
        $disposal = Disposal::get();
        $osisa = Osisa::get();
        $pdf = PDF::loadview('module.pdf2',['hwGeneration'=>$hwGeneration,'hwDetails'=>$hwDetails,'storage'=>$storage,
        'transporter'=>$transporter,'treater'=>$treater,'disposal'=>$disposal,'osisa'=>$osisa


        ]);
        return $pdf->download('moduleTwo.pdf');


    }
}

