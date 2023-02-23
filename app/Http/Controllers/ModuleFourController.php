<?php

namespace App\Http\Controllers;

use App\Models\Administrative_and_Overhead_Costs;
use App\Models\Cost_of_improvement_of_modification;
use App\Models\Cost_of_operating_in_house_laboratory;
use App\Models\Cost_of_person_employed;
use App\Models\DetailReport;
use App\Models\Improvement_or_modification;
use App\Models\Summary1;
use App\Models\Summary2;
use App\Models\Summary3;
use App\Models\Total_Consumption_of_Electricity;
use App\Models\Total_Consumption_of_Water;
use App\Models\Total_Cost_of_Chemicals_used;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ModuleFourController extends Controller
{
    public function index(){
        $summary1 = Summary1::all();
        $summary2 = Summary2::all();
        $summary3 = Summary3::all();
        $cost_of_person_employed = Cost_of_person_employed::all();
        $total_consumption_of_water = Total_Consumption_of_Water::all();
        $total_cost_of_chemicals_used = Total_Cost_of_Chemicals_used::all();
        $total_consumption_of_electricity = Total_Consumption_of_Electricity::all();
        $administrative_and_overhead_costs = Administrative_and_Overhead_Costs::all();
        $cost_of_operating_in_house_laboratory = Cost_of_operating_in_house_laboratory::all();
        $improvement_or_modification = Improvement_or_modification::all();
        $cost_of_improvement_of_modification = Cost_of_improvement_of_modification::all();
        $detailreport = DetailReport::all();
        $detailreport1 = DetailReport::all();



        return view('module.moduleFour');
        -with(['summary1'=>$summary1,'summary2'=>$summary2,'summary3'=>$summary3,
        'cost_of_person_employed'=>$cost_of_person_employed,'total_consumption_of_water'=>$total_consumption_of_water,
        'total_cost_of_chemicals_used'=>$total_cost_of_chemicals_used,'total_consumption_of_electricity'=>$total_consumption_of_electricity,
        'administrative_and_overhead_costs'=>$administrative_and_overhead_costs,'cost_of_operating_in_house_laboratory'=>$cost_of_operating_in_house_laboratory
        ,'improvement_or_modification'=>$improvement_or_modification,'cost_of_improvement_of_modification'=>$cost_of_improvement_of_modification,
        'detailreport'=>$detailreport,'detailreport'=>$detailreport1

    ]);

    }
public function save(Request $request){




    $summary1 = $request->input('summary1');
    for ($x=0; $x<count($summary1); $x+=3 ){
        $DBsummary1 = new Summary1();
        $DBsummary1->Process_Equipment = $summary1[$x];
        $DBsummary1->Location = $summary1[$x+1];
        $DBsummary1->no_of_hours_of_operation_for_the_quarter = $summary1[$x+2];

        $DBsummary1->save();
    }

    $summary2 = $request->input('summary2');
    for ($x=0; $x<count($summary2); $x+=7 ){
        $DBsummary2 = new Summary2();
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
        $DBsummary3->Pollution_Control_Facility = $summary3[$x];
        $DBsummary3->Location = $summary3[$x+1];
        $DBsummary3->no_of_hours_of_operation_for_the_quarter = $summary3[$x+2];

        $DBsummary3->save();
    }

    $cost_of_person_employed = new Cost_of_person_employed();
        $cost_of_person_employed->month1 = $request->input('COPEMonth1');
        $cost_of_person_employed->month2 = $request->input('COPEMonth2');
        $cost_of_person_employed->month3 = $request->input('COPEMonth3');

        $cost_of_person_employed->save();

     $total_consumption_of_water = new Total_Consumption_of_Water();
        $total_consumption_of_water->month1 = $request->input('TCOWMonth1');
        $total_consumption_of_water->month2 = $request->input('TCOWMonth2');
        $total_consumption_of_water->month3 = $request->input('TCOWMonth3');

        $total_consumption_of_water->save();

    $total_cost_of_chemicals_used = new Total_Cost_of_Chemicals_used();
        $total_cost_of_chemicals_used->month1 = $request->input('TCOCMonth1');
        $total_cost_of_chemicals_used->month2 = $request->input('TCOCMonth2');
        $total_cost_of_chemicals_used->month3 = $request->input('TCOCMonth3');

        $total_cost_of_chemicals_used->save();

    $total_consumption_of_electricity = new Total_Consumption_of_Electricity();
        $total_consumption_of_electricity->month1 = $request->input('TCOEMonth1');
        $total_consumption_of_electricity->month2 = $request->input('TCOEMonth2');
        $total_consumption_of_electricity->month3 = $request->input('TCOEMonth3');

        $total_consumption_of_electricity->save();

    $administrative_and_overhead_costs = new Administrative_and_Overhead_Costs();
        $administrative_and_overhead_costs->month1 = $request->input('AAOCMonth1');
        $administrative_and_overhead_costs->month2 = $request->input('AAOCMonth2');
        $administrative_and_overhead_costs->month3 = $request->input('AAOCMonth3');

        $administrative_and_overhead_costs->save();

    $cost_of_operating_in_house_laboratory = new Cost_of_operating_in_house_laboratory();
        $cost_of_operating_in_house_laboratory->month1 = $request->input('COPIHLMonth1');
        $cost_of_operating_in_house_laboratory->month2 = $request->input('COPIHLMonth2');
        $cost_of_operating_in_house_laboratory->month3 = $request->input('COPIHLMonth3');

        $cost_of_operating_in_house_laboratory->save();

    $improvement_or_modification = new Improvement_or_modification();
        $improvement_or_modification->month1 = $request->input('IOMMonth1');
        $improvement_or_modification->month2 = $request->input('IOMMonth2');
        $improvement_or_modification->month3 = $request->input('IOMMonth3');

        $improvement_or_modification->save();

    $cost_of_improvement_of_modification = new Cost_of_improvement_of_modification();
        $cost_of_improvement_of_modification->month1 = $request->input('COIOMonth1');
        $cost_of_improvement_of_modification->month2 = $request->input('COIOMonth2');
        $cost_of_improvement_of_modification->month3 = $request->input('COIOMonth3');

        $cost_of_improvement_of_modification->save();





    $detailreport = $request->input('detailreport');
    for ($x=0; $x<count($detailreport); $x+=7 ){
        $DBdetailreport = new DetailReport();
        $DBdetailreport->FBE_No = $detailreport[$x];
        $DBdetailreport->Date = $detailreport[$x+1];
        $DBdetailreport->Flow_Rate_Ncm_day = $detailreport[$x+2];
        $DBdetailreport->CO_mg_Ncm = $detailreport[$x+3];
        $DBdetailreport->NOx_mg_Ncm = $detailreport[$x+4];
        $DBdetailreport->Particulates_mg_Ncm = $detailreport[$x+5];
        $DBdetailreport->SOx_mg_Ncm = $detailreport[$x+6];


        $DBdetailreport->save();


    }

    return view('module.moduleFour');
}

    public function delete (){

        DB::table('summary1')->delete();
        DB::table('summary2')->delete();
        DB::table('summary3')->delete();
        DB::table('cost_of_person_employed')->delete();
        DB::table('total_consumption_of_water')->delete();
        DB::table('total_cost_of_chemicals_used')->delete();
        DB::table('total_consumption_of_electricity')->delete();
        DB::table('total_cost_of_chemicals_used')->delete();
        DB::table('administrative_and_overhead_costs')->delete();
        DB::table('cost_of_operating_in_house_laboratory')->delete();
        DB::table('improvement_or_modification')->delete();
        DB::table('cost_of_improvement_of_modification')->delete();
        DB::table('detailreport')->delete();

        return view('module.moduleFour');
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


}

