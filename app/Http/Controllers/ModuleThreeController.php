<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
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
use App\Models\Referencen;
use App\Models\User;
use App\Models\UtilityCost;
use App\Models\WaterPolutionData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class ModuleThreeController extends Controller
{
    public function index(){

        $waterpolutiondata = Auth::user()->waterpolutiondata();
        $personEmployed = Auth::user()->personEmployed();
        $personEmployedCost = Auth::user()->personEmployedCost();
        $costofchemical = Auth::user()->costofchemical();
        $utilitycost = Auth::user()->utilitycost();
        $administrativecosts = Auth::user()->administrativecosts();
        $costofoperating = Auth::user()->costofoperating();
        $newinvestment = Auth::user()->newinvestment();
        $costofnew = Auth::user()->costofnew();
        $dischargeLocation = Auth::user()->dischargeLocation();
        $dreportofwaste = Auth::user()->dreportofwaste();
        $drowcfop = Auth::user()->drowcfop();
        $drowcfop1 = Auth::user()->drowcfop1();
        $reference= Auth::user()->reference_no()->first();
        $dreportofwaste_parameter = Auth::user()->dreportofwaste_parameter();


        return view('module.moduleThree')
            ->with([
                'waterpolutiondata'=>$waterpolutiondata,
                'personEmployed'=>$personEmployed,
                'personEmployedCost'=>$personEmployedCost,
                'costofchemical'=>$costofchemical,
                'utilitycost'=>$utilitycost,
                'administrativecosts'=>$administrativecosts,
                'costofoperating'=>$costofoperating,
                'newinvestment'=>$newinvestment,
                'costofnew'=>$costofnew,
                'dischargeLocation'=>$dischargeLocation,
                'dreportofwaste'=>$dreportofwaste,
                'drowcfop'=>$drowcfop,
                'drowcfop1'=>$drowcfop1,
                'referencen'=>$reference->ref_no,
                'dreportof_waste_parameters'=>$dreportofwaste_parameter,
            ]);


    }

    public function save(Request $request){


        $waterpolutiondata  = new WaterPolutionData();
        $waterpolutiondata->userid = Auth::user()->id;
        $waterpolutiondata->Domestic_wastewater = $request->input('domwaste');
        $waterpolutiondata->Cooling_water = $request->input('coolingw');
        $waterpolutiondata->Waste_water_equipment = $request->input('wequip');
        $waterpolutiondata->Processs_wastewater = $request->input('processwaste');
        $waterpolutiondata->others_n = $request->input('othern');
        $waterpolutiondata->others_m = $request->input('othercm');
        $waterpolutiondata->Waste_water_floor = $request->input('wwfloor');


        $waterpolutiondata->save();

        $personEmployed = new PersonEmployed();
        $personEmployed->userid = Auth::user()->id;
        $personEmployed->Month_1 = $request->input('pemonth1');
        $personEmployed->Month_2 = $request->input('pemonth2');
        $personEmployed->Month_3 = $request->input('pemonth3');

        $personEmployed->save();

        $personEmployedCost = new PersonEmployedCost();
        $personEmployedCost->userid = Auth::user()->id;
        $personEmployedCost->Month_1 = $request->input('pecmonth1');
        $personEmployedCost->Month_2 = $request->input('pecmonth2');
        $personEmployedCost->Month_3 = $request->input('pecmonth3');

        $personEmployedCost->save();

        $costofchemical = new CostOfChemical();
        $costofchemical->userid = Auth::user()->id;
        $costofchemical->Month_1 = $request->input('cocw1');
        $costofchemical->Month_2 = $request->input('cocw2');
        $costofchemical->Month_3 = $request->input('cocw3');

        $costofchemical->save();

        $utilitycost = new UtilityCost();
        $utilitycost->userid = Auth::user()->id;
        $utilitycost->Month_1 = $request->input('ucw1');
        $utilitycost->Month_2 = $request->input('ucw2');
        $utilitycost->Month_3 = $request->input('ucw3');

        $utilitycost->save();

        $administrativecosts = new AdministrativeCost();
        $administrativecosts->userid = Auth::user()->id;
        $administrativecosts->Month_1 = $request->input('aoc1');
        $administrativecosts->Month_2 = $request->input('aoc2');
        $administrativecosts->Month_3 = $request->input('aoc3');

        $administrativecosts->save();

        $costofoperating = new CostOfOperating();
        $costofoperating->userid = Auth::user()->id;
        $costofoperating->Month_1 = $request->input('colab1');
        $costofoperating->Month_2 = $request->input('colab2');
        $costofoperating->Month_3 = $request->input('colab3');

        $costofoperating->save();

        $newinvestment = new NewInvestment();
        $newinvestment->userid = Auth::user()->id;
        $newinvestment->Month_1 = $request->input('nai1');
        $newinvestment->Month_2 = $request->input('nai2');
        $newinvestment->Month_3 = $request->input('nai3');

        $newinvestment->save();

        $costofnew = new CostOfNew();
        $costofnew->userid = Auth::user()->id;
        $costofnew->Month_1 = $request->input('cnai1');
        $costofnew->Month_2 = $request->input('cnai2');
        $costofnew->Month_3 = $request->input('cnai3');

        $costofnew->save();

        $dischargeLocation = $request->input('dischargeLocation');
        for ($x=0; $x<count($dischargeLocation); $x+=3 ){
            $DBdischargeLocation = new DischargeLocation();
            $DBdischargeLocation->userid = Auth::user()->id;
            $DBdischargeLocation->Outlet_Number = $dischargeLocation[$x];
            $DBdischargeLocation->Location_of_Outlet = $dischargeLocation[$x+1];
            $DBdischargeLocation->Name_of_Receiving_water_body = $dischargeLocation[$x+2];
            $DBdischargeLocation->save();
        }
        /*dreportwaste_parameter*/
        $dreportofwaste_parameter = $request->input('dreportof_waste_parameters');
        $dreportofwaste_parameter = new DreportofWaste_parameter();
        $dreportofwaste_parameter->userid = Auth::user()->id;
        $dreportofwaste_parameter->name_parameter = $request->input('name_parameter');
        $dreportofwaste_parameter->unit_parameter = $request->input('unit_parameter');
        $dreportofwaste_parameter->save();
        /*end dreportwaste_parameter*/

        $dreportofwaste = $request->input('dreportofwaste');
        for ($x=0; $x<count($dreportofwaste); $x+=10 ){
            $DBdreportofwaste = new DreportofWaste();
            $DBdreportofwaste->userid = Auth::user()->id;
            $DBdreportofwaste->Outlet_No = $dreportofwaste[$x];
            $DBdreportofwaste->date = date('Y-m-d', strtotime($dreportofwaste[$x+1]));
            $DBdreportofwaste->Effluent_Flow_Rate = $dreportofwaste[$x+2];
            $DBdreportofwaste->BOD_mg_L = $dreportofwaste[$x+3];
            $DBdreportofwaste->TSS_mg_L = $dreportofwaste[$x+4];
            $DBdreportofwaste->Color = $dreportofwaste[$x+5];
            $DBdreportofwaste->pH = $dreportofwaste[$x+6];
            $DBdreportofwaste->Oil_Grease_mg_L = $dreportofwaste[$x+7];
            $DBdreportofwaste->Temp_Rise = $dreportofwaste[$x+8];
            /*new parameter*/
            $DBdreportofwaste->Add_parameter = $dreportofwaste[$x+9];

            $DBdreportofwaste->save();
        }

        $drowcfop = new Drowcfop();
        $drowcfop->userid = Auth::user()->id;
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

        $drowcfop->save();



        $drowcfop1 = $request->input('drowcfop1');
        for ($x=0; $x<count($drowcfop1); $x+=10 ){
            $DBdrowcfop1 = new Drowcfop1();
            $DBdrowcfop1->userid = Auth::user()->id;
            $DBdrowcfop1->Outlet_No = $drowcfop1[$x];
            $DBdrowcfop1->date = date('Y-m-d', strtotime($drowcfop1[$x+1]));
            $DBdrowcfop1->Effluent_Flow_Rate_m3_day = $drowcfop1[$x+2];
            $DBdrowcfop1->value1 = $drowcfop1[$x+3];
            $DBdrowcfop1->value2 = $drowcfop1[$x+4];
            $DBdrowcfop1->value3 = $drowcfop1[$x+5];
            $DBdrowcfop1->value4 = $drowcfop1[$x+6];
            $DBdrowcfop1->value5 = $drowcfop1[$x+7];
            $DBdrowcfop1->value6 = $drowcfop1[$x+8];
            $DBdrowcfop1->value7 = $drowcfop1[$x+9];
            $DBdrowcfop1->save();



        }




        return redirect('moduleFour');

    }


    public function edit(){


        $id = Auth::id();
        $users = User::find($id);

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

        $referencens = Auth::user()->reference_no()->get();

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

    public function update(Request $request, $id){

        $waterpolutiondata = WaterPolutionData::where('userid', $id)->first();
        dd($waterpolutiondata);
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


        for ($x = count($DBdreportofwaste)*10; $x < count($dreportofwaste); $x += 10) {
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




        return redirect()->route('view2', ['id' => $userId]);

    }




    public function pdf(){

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
        $dreportof_waste_parameters = Auth::user()->dreportofwaste_parameter()->get();
        $drowcfop = Auth::user()->drowcfop()->get();
        $drowcfop1 = Auth::user()->drowcfop1()->get();

        $customPaper = array(0,0,800.00,800.90);
        $pdf = PDF::loadview('module.pdf3',[
            'waterpolutiondata'=>$waterpolutiondata,
            'personEmployed'=>$personEmployed,
            'personEmployedCost'=>$personEmployedCost,
            'costofchemical'=>$costofchemical,
            'utilitycost'=>$utilitycost,
            'administrativecosts'=>$administrativecosts,
            'costofoperating'=>$costofoperating,
            'newinvestment'=>$newinvestment,
            'costofnew'=>$costofnew,
            'dischargeLocation'=>$dischargeLocation,
            'dreportofwaste'=>$dreportofwaste,
            'dreportof_waste_parameters'=>$dreportof_waste_parameters,
            'drowcfop'=>$drowcfop,
            'drowcfop1'=>$drowcfop1


        ])->setPaper($customPaper,'A4');


        return $pdf->download('moduleThree.pdf');

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
        return redirect('moduleThree');
    }
}
