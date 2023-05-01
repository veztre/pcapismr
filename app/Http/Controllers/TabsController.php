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
    public function index()
    {
        return view('tabs', [
            'moduleOne' => route('view'),
            'module2' => route('view2'),
            'module3' => route('view3'),
            'module4' => route('view4'),
            'module5' => route('view5'),
            'module6' => route('view6'),
        ]);
    }



    //

}
