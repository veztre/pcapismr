<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Administrative_and_Overhead_Costs;
use App\Models\AdministrativeCost;
use App\Models\Cost_of_improvement_of_modification;
use App\Models\Cost_of_operating_in_house_laboratory;
use App\Models\Cost_of_person_employed;
use App\Models\DetailReport;
use App\Models\Improvement_or_modification;
use App\Models\referencen;
use App\Models\Summary1;
use App\Models\Summary2;
use App\Models\Summary3;
use App\Models\Total_Consumption_of_Electricity;
use App\Models\Total_Consumption_of_Water;
use App\Models\Total_Cost_of_Chemicals_used;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class ModuleFourController extends Controller
{
    public function index(){
        $summary1 = Auth::user()->summary1();
        $summary2 = Auth::user()->summary2();
        $summary3 = Auth::user()->summary3();
        $cost_of_person_employed = Auth::user()->cost_of_person_employed();
        $total_consumption_of_water = Auth::user()->total_consumption_of_water();
        $total_cost_of_chemicals_used = Auth::user()->total_cost_of_chemicals_used();
        $total_consumption_of_electricity = Auth::user()->total_consumption_of_electricity();
        $administrative_and_overhead_costs = Auth::user()->administrative_and_overhead_costs();
        $cost_of_operating_in_house_laboratory = Auth::user()->cost_of_operating_in_house_laboratory();
        $improvement_or_modification = Auth::user()->improvement_or_modification();
        $cost_of_improvement_of_modification = Auth::user()->cost_of_improvement_of_modification();
        $detailreport = Auth::user()->detailreport();
        $reference= Auth::user()->reference_no()->first();



        return view('module.moduleFour')
            ->with([
                'summary1'=>$summary1,
                'summary2'=>$summary2,
                'summary3'=>$summary3,
                'cost_of_person_employed'=>$cost_of_person_employed,
                'total_consumption_of_water'=>$total_consumption_of_water,
                'total_cost_of_chemicals_used'=>$total_cost_of_chemicals_used,
                'total_consumption_of_electricity'=>$total_consumption_of_electricity,
                'administrative_and_overhead_costs'=>$administrative_and_overhead_costs,
                'cost_of_operating_in_house_laboratory'=>$cost_of_operating_in_house_laboratory,
                'improvement_or_modification'=>$improvement_or_modification,
                'cost_of_improvement_of_modification'=>$cost_of_improvement_of_modification,
                'detailreport'=>$detailreport,
                'referencen'=>$reference->ref_no

            ]);

    }
    public function save(Request $request){




        $summary1 = $request->input('summary1');
        for ($x=0; $x<count($summary1); $x+=3 ){
            $DBsummary1 = new Summary1();
            $DBsummary1->userid = Auth::user()->id;
            $DBsummary1->Process_Equipment = $summary1[$x];
            $DBsummary1->Location = $summary1[$x+1];
            $DBsummary1->no_of_hours_of_operation_for_the_quarter = $summary1[$x+2];

            $DBsummary1->save();
        }

        $summary2 = $request->input('summary2');
        for ($x=0; $x<count($summary2); $x+=7 ){
            $DBsummary2 = new Summary2();
            $DBsummary2->userid = Auth::user()->id;
            $DBsummary2->Fuel_Burning_Equipment = $summary2[$x];
            $DBsummary2->Rated_Capacity = $summary2[$x+1];
            $DBsummary2->Location = $summary2[$x+2];
            $DBsummary2->Fuel_Used = $summary2[$x+3];
            $DBsummary2->Quantity_Consumed_for_the_quarter = $summary2[$x+4];
            $DBsummary2->Unit_Consumed_for_the_quarter = $summary2[$x+5];
            $DBsummary2->no_of_hours_of_operation_for_the_quarter = $summary2[$x+6];

            $DBsummary2->save();
        }

        $summary3 = $request->input('summary3');
        for ($x=0; $x<count($summary3); $x+=3 ){
            $DBsummary3 = new Summary3();
            $DBsummary3->userid = Auth::user()->id;
            $DBsummary3->Pollution_Control_Facility = $summary3[$x];
            $DBsummary3->Location = $summary3[$x+1];
            $DBsummary3->no_of_hours_of_operation_for_the_quarter = $summary3[$x+2];

            $DBsummary3->save();
        }

        $cost_of_person_employed = $request->input('cost_of_person_employed');
        for ($x=0; $x<count($cost_of_person_employed); $x+=3 ){
            $DBcost_of_person_employed = new Cost_of_person_employed();
            $DBcost_of_person_employed->userid = Auth::user()->id;
            $DBcost_of_person_employed->month1 = $cost_of_person_employed[$x];
            $DBcost_of_person_employed->month2 = $cost_of_person_employed[$x+1];
            $DBcost_of_person_employed->month3 = $cost_of_person_employed[$x+2];

            $DBcost_of_person_employed->save();
        }

        $total_consumption_of_water = $request->input('total_consumption_of_water');
        for ($x=0; $x<count($total_consumption_of_water); $x+=3 ){
            $DBtotal_consumption_of_water = new Total_Consumption_of_Water();
            $DBtotal_consumption_of_water->userid = Auth::user()->id;
            $DBtotal_consumption_of_water->month1 = $total_consumption_of_water[$x];
            $DBtotal_consumption_of_water->month2 = $total_consumption_of_water[$x+1];
            $DBtotal_consumption_of_water->month3 = $total_consumption_of_water[$x+2];

            $DBtotal_consumption_of_water->save();
        }

        $total_cost_of_chemicals_used = $request->input('total_cost_of_chemicals_used');
        for ($x=0; $x<count($total_cost_of_chemicals_used); $x+=3 ){
            $DBtotal_cost_of_chemicals_used = new Total_Cost_of_Chemicals_used();
            $DBtotal_cost_of_chemicals_used->userid = Auth::user()->id;
            $DBtotal_cost_of_chemicals_used->month1 = $total_cost_of_chemicals_used[$x];
            $DBtotal_cost_of_chemicals_used->month2 = $total_cost_of_chemicals_used[$x+1];
            $DBtotal_cost_of_chemicals_used->month3 = $total_cost_of_chemicals_used[$x+2];

            $DBtotal_cost_of_chemicals_used->save();
        }

        $total_consumption_of_electricity = $request->input('total_consumption_of_electricity');
        for ($x=0; $x<count($total_consumption_of_electricity); $x+=3 ){
            $DBtotal_consumption_of_electricity = new Total_Consumption_of_Electricity();
            $DBtotal_consumption_of_electricity->userid = Auth::user()->id;
            $DBtotal_consumption_of_electricity->month1 = $total_consumption_of_electricity[$x];
            $DBtotal_consumption_of_electricity->month2 = $total_consumption_of_electricity[$x+1];
            $DBtotal_consumption_of_electricity->month3 = $total_consumption_of_electricity[$x+2];

            $DBtotal_consumption_of_electricity->save();
        }

        $administrative_and_overhead_costs = $request->input('administrative_and_overhead_costs');
        for ($x=0; $x<count($administrative_and_overhead_costs); $x+=3 ){
            $DBadministrative_and_overhead_costs = new Administrative_and_Overhead_Costs();
            $DBadministrative_and_overhead_costs->userid = Auth::user()->id;
            $DBadministrative_and_overhead_costs->month1 = $administrative_and_overhead_costs[$x];
            $DBadministrative_and_overhead_costs->month2 = $administrative_and_overhead_costs[$x+1];
            $DBadministrative_and_overhead_costs->month3 = $administrative_and_overhead_costs[$x+2];

            $DBadministrative_and_overhead_costs->save();
        }

        $cost_of_operating_in_house_laboratory = $request->input('cost_of_operating_in_house_laboratory');
        for ($x=0; $x<count($cost_of_operating_in_house_laboratory); $x+=3 ){
            $DBcost_of_operating_in_house_laboratory = new Cost_of_operating_in_house_laboratory();
            $DBcost_of_operating_in_house_laboratory->userid = Auth::user()->id;
            $DBcost_of_operating_in_house_laboratory->month1 = $cost_of_operating_in_house_laboratory[$x];
            $DBcost_of_operating_in_house_laboratory->month2 = $cost_of_operating_in_house_laboratory[$x+1];
            $DBcost_of_operating_in_house_laboratory->month3 = $cost_of_operating_in_house_laboratory[$x+2];

            $DBcost_of_operating_in_house_laboratory->save();
        }

        $improvement_or_modification = $request->input('improvement_or_modification');
        for ($x=0; $x<count($improvement_or_modification); $x+=3 ){
            $DBimprovement_or_modification = new Improvement_or_modification();
            $DBimprovement_or_modification->userid = Auth::user()->id;
            $DBimprovement_or_modification->month1 = $improvement_or_modification[$x];
            $DBimprovement_or_modification->month2 = $improvement_or_modification[$x+1];
            $DBimprovement_or_modification->month3 = $improvement_or_modification[$x+2];

            $DBimprovement_or_modification->save();
        }

        $cost_of_improvement_of_modification = $request->input('cost_of_improvement_of_modification');
        for ($x=0; $x<count($cost_of_improvement_of_modification); $x+=3 ){
            $DBcost_of_improvement_of_modification = new Cost_of_improvement_of_modification();
            $DBcost_of_improvement_of_modification->userid = Auth::user()->id;
            $DBcost_of_improvement_of_modification->month1 = $cost_of_improvement_of_modification[$x];
            $DBcost_of_improvement_of_modification->month2 = $cost_of_improvement_of_modification[$x+1];
            $DBcost_of_improvement_of_modification->month3 = $cost_of_improvement_of_modification[$x+2];

            $DBcost_of_improvement_of_modification->save();
        }





        $detailreport = $request->input('detailreport');
        for ($x=0; $x<count($detailreport); $x+=7 ){
            $DBdetailreport = new DetailReport();
            $DBdetailreport->userid = Auth::user()->id;
            $DBdetailreport->FBE_No = $detailreport[$x];
            $DBdetailreport->Date = $detailreport[$x+1];
            $DBdetailreport->Flow_Rate_Ncm_day = $detailreport[$x+2];
            $DBdetailreport->CO_mg_Ncm = $detailreport[$x+3];
            $DBdetailreport->NOx_mg_Ncm = $detailreport[$x+4];
            $DBdetailreport->Particulates_mg_Ncm = $detailreport[$x+5];
            $DBdetailreport->SOx_mg_Ncm = $detailreport[$x+6];


            $DBdetailreport->save();


        }

        return redirect('moduleFive');
    }



    public function edit($id){

        $summary1 = Summary1::get();
        $summary2 = Summary2::get();
        $summary3 = Summary3::get();
        $cost_of_person_employed = Cost_of_person_employed::get();
        $total_consumption_of_water = Total_Consumption_of_Water::get();
        $total_consumption_of_electricity = Total_Consumption_of_Electricity::get();
        $total_cost_of_chemicals_used = Total_Cost_of_Chemicals_used::get();
        $administrative_and_overhead_costs = Administrative_and_Overhead_Costs::get();
        $cost_of_operating_in_house_laboratory = Cost_of_operating_in_house_laboratory::get();
        $improvement_or_modification = Improvement_or_modification::get();
        $cost_of_improvement_of_modification = Cost_of_improvement_of_modification::get();
        $detailreport = DetailReport::get();

        $reference = referencen::get();
        $users = User::find($id);

        return view('module.updatemoduleFour',
            compact('users',
                'reference',
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

            ));

    }

    public function update (Request $request, $id){

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



        return redirect()->back();
    }



    public function pdf(){

        $summary1 = Summary1::get();
        $summary2 = Summary2::get();
        $summary3 = Summary3::get();
        $cost_of_person_employed = Cost_of_person_employed::get();
        $total_consumption_of_water = Total_Consumption_of_Water::get();
        $total_cost_of_chemicals_used = Total_Cost_of_Chemicals_used::get();
        $total_consumption_of_electricity =Total_Consumption_of_Electricity::get();
        $administrative_and_overhead_costs = Administrative_and_Overhead_Costs::get();
        $cost_of_operating_in_house_laboratory = Cost_of_operating_in_house_laboratory::get();
        $improvement_or_modification = Improvement_or_modification::get();
        $cost_of_improvement_of_modification =Cost_of_improvement_of_modification::get();
        $detailreport = DetailReport::get();
        $pdf = PDF::loadView('module.pdf4',[
            'summary1'=>$summary1,'summary2'=>$summary2,'summary3'=>$summary3,'cost_of_person_employed'=>$cost_of_person_employed,
            'total_consumption_of_water'=>$total_consumption_of_water,'total_cost_of_chemicals_used'=>$total_cost_of_chemicals_used,
            'total_consumption_of_electricity'=>$total_consumption_of_electricity,'administrative_and_overhead_costs'=>$administrative_and_overhead_costs,
            'cost_of_operating_in_house_laboratory'=>$cost_of_operating_in_house_laboratory,'improvement_or_modification'=>$improvement_or_modification,
            'cost_of_improvement_of_modification'=>$cost_of_improvement_of_modification,'detailreport'=>$detailreport

        ]);
        return $pdf->download('moduleFour.pdf');

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
        return redirect('moduleFour');
    }


}

