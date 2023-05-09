<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasRoles;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string<int, string>
     */
    protected $fillable =  [
        'role_id',
        'username',
        'firstname',
        'lastname',
        'position',
        'company',
        'email',
        'contact',
        'region',
        'password',
        'company_id',
        'government_id',
        'usertype',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];




  /* Module1 start*/

    public function plant(){
        return $this->hasOne(Plant::class,foreignKey: 'userid');
    }
     public function gic(){
        return $this->hasOne(Gic::class,foreignKey: 'userid');
    }
     public function aircon(){
        return $this->hasOne(Aircon::class,foreignKey: 'userid');
    }

     public function denrid(){
        return $this->hasOne(Denrid::class,foreignKey: 'userid');
    }
     public function transporterReg(){
        return $this->hasOne(TransporterReg::class,foreignKey: 'userid');
    }

     public function tsdreg(){
        return $this->hasOne(Tsdreg::class,foreignKey: 'userid');
    }
     public function acno(){
        return $this->hasOne(Acno::class,foreignKey: 'userid');
    }
    public function operation(){
        return $this->hasOne(Operation::class,foreignKey: 'userid');
    }

     public function production(){
        return $this->hasOne(Production::class,foreignKey: 'userid');
    }


    public function dpno(){
        return $this->hasMany(Dpno::class,foreignKey: 'userid');
    }

    public function cncno(){
        return $this->hasMany(Cncno::class,foreignKey: 'userid');
    }

    public function ccoreg(){
        return $this->hasMany(Ccoreg::class,foreignKey: 'userid');
    }
    public function import(){
        return $this->hasMany(Import::class,foreignKey: 'userid');
    }
    public function permit(){
        return $this->hasMany(Permmit::class,foreignKey: 'userid');
    }

    public function smallquan(){
        return $this->hasMany(Smallquan::class,foreignKey: 'userid');
    }
    public function priority(){
        return $this->hasMany(Priority::class,foreignKey: 'userid');
    }
    public function piccs(){
        return $this->hasMany(Piccs::class,foreignKey: 'userid');
    }
    public function pmpin(){
        return $this->hasMany(Pmpin::class,foreignKey: 'userid');
    }
    public function pono(){
        return $this->hasMany(Pono::class,foreignKey: 'userid');
    }

   /* Module1 end*/

    /*Module 2 start*/
    public function hwDetails(){
        return $this->hasMany(HWDetails::class,foreignKey: 'userid');
    }

    public function hwGeneration(){
        return $this->hasMany(HwGeneration::class,foreignKey: 'userid');
    }

    public function storage(){
        return $this->hasMany(Storage::class,foreignKey: 'userid');
    }
    public function transporter(){
        return $this->hasMany(Transporter::class,foreignKey: 'userid');
    }
    public function treater(){
        return $this->hasMany(Treater::class,foreignKey: 'userid');
    }
    public function disposal(){
        return $this->hasMany(Disposal::class,foreignKey: 'userid');
    }
    public function osisa(){
        return $this->hasMany(Osisa::class,foreignKey: 'userid');
    }

    /*Module 2 end*/

/*    Module 3 start*/
    public function waterpolutiondata(){
        return $this->hasOne(WaterPolutionData::class,foreignKey: 'userid');
    }

    public function personEmployed(){
        return $this->hasOne(PersonEmployed::class,foreignKey: 'userid');
    }
    public function personEmployedCost(){
        return $this->hasOne(PersonEmployedCost::class,foreignKey: 'userid');
    }
    public function costofchemical(){
        return $this->hasOne(CostOfChemical::class,foreignKey: 'userid');
    }
    public function utilitycost(){
        return $this->hasOne(UtilityCost::class,foreignKey: 'userid');
    }
    public function administrativecosts(){
        return $this->hasOne(AdministrativeCost::class,foreignKey: 'userid');
    }
    public function costofoperating(){
        return $this->hasOne(CostOfOperating::class,foreignKey: 'userid');
    }
    public function newinvestment(){
        return $this->hasOne(NewInvestment::class,foreignKey: 'userid');
    }
    public function costofnew (){
        return $this->hasOne(CostOfNew::class,foreignKey: 'userid');
    }
    public function drowcfop (){
        return $this->hasOne(Drowcfop::class,foreignKey: 'userid');
    }

    public function dischargeLocation(){
        return $this->hasMany(DischargeLocation::class,foreignKey: 'userid');
    }

    public function dreportofwaste(){
        return $this->hasMany(DreportofWaste::class,foreignKey: 'userid');
    }

    public function drowcfop1(){
        return $this->hasMany(Drowcfop1::class,foreignKey: 'userid');
    }

    /*New parameter*/
    public function dreportofwaste_parameter (){
        return $this->hasOne(DreportofWaste_parameter::class,foreignKey: 'userid');
    }
    /*Module 3 End */

    /*Module4 start*/
    public function summary1(){
        return $this->hasMany(Summary1::class,foreignKey: 'userid');
    }
    public function summary2(){
        return $this->hasMany(Summary2::class,foreignKey: 'userid');
    }
    public function summary3(){
        return $this->hasMany(Summary3::class,foreignKey: 'userid');
    }

    public function cost_of_person_employed (){
        return $this->hasMany(Cost_of_person_employed::class,foreignKey: 'userid');
    }
    public function total_consumption_of_water (){
        return $this->hasMany(Total_Consumption_of_Water::class,foreignKey: 'userid');
    }
    public function total_cost_of_chemicals_used (){
        return $this->hasMany(Total_Cost_of_Chemicals_used::class,foreignKey: 'userid');
    }
    public function total_consumption_of_electricity (){
        return $this->hasMany(Total_Consumption_of_Electricity::class,foreignKey: 'userid');
    }
    public function administrative_and_overhead_costs (){
        return $this->hasMany(Administrative_and_Overhead_Costs::class,foreignKey: 'userid');
    }
    public function cost_of_operating_in_house_laboratory (){
        return $this->hasMany(Cost_of_operating_in_house_laboratory::class,foreignKey: 'userid');
    }
    public function improvement_or_modification (){
        return $this->hasMany(Improvement_or_modification::class,foreignKey: 'userid');
    }
    public function cost_of_improvement_of_modification (){
        return $this->hasMany(Cost_of_improvement_of_modification::class,foreignKey: 'userid');
    }
    public function detailreport (){
        return $this->hasMany(DetailReport::class,foreignKey: 'userid');
    }
    public function detail_parameter (){
        return $this->hasOne(DetailParameter::class,foreignKey: 'userid');
    }

    public function detail_parameter_value (){
        return $this->hasOne(DetailParameterValue::class,foreignKey: 'userid');
    }
    /*Module 4 end*/


/*    Module 5 start*/
    public function evmpprogram (){
        return $this->hasOne(EVMPprogram::class,foreignKey: 'userid');
    }
    public function aqg (){
        return $this->hasOne(AQG::class,foreignKey: 'userid');
    }
    public function tqg (){
        return $this->hasOne(TQG::class,foreignKey: 'userid');
    }
    public function aqc (){
        return $this->hasOne(AQC::class,foreignKey: 'userid');
    }
    public function tqc (){
        return $this->hasOne(TQC::class,foreignKey: 'userid');
    }
    public function eicc (){
        return $this->hasOne(EICC::class,foreignKey: 'userid');
    }
    public function description (){
        return $this->hasOne(Description::class,foreignKey: 'userid');
    }
    public function awqmonitoring1 (){
        return $this->hasOne(Awqmonitoring1::class,foreignKey: 'userid');
    }
    public function awqmonitoring (){
        return $this->hasOne(Awqmonitoring::class,foreignKey: 'userid');
    }
    public function aaqmonitoring_parameter (){
        return $this->hasOne(AAQmonitoring_parameter::class,foreignKey: 'userid');
    }
    public function aaqmonitoring (){
        return $this->hasmany(AAQmonitoring::class,foreignKey: 'userid');
    }
    public function oecondition (){
        return $this->hasmany(OECondition::class,foreignKey: 'userid');
    }
/*    Module 5 end*/


/*    Module 6 start*/
    public function accident_records (){
        return $this->hasmany(AccidentRecord::class,foreignKey: 'userid');
    }

    public function personel_staff (){
        return $this->hasmany(PersonelStaff::class,foreignKey: 'userid');
    }
    public function oattachment (){
        return $this->hasone(Oattachment::class,foreignKey: 'userid');
    }
    public function oaemployee (){
        return $this->hasone(Oaemployee::class,foreignKey: 'userid');
    }
    public function oaemployee1 (){
        return $this->hasone(Oaemployee1::class,foreignKey: 'userid');
    }
    public function oaupload (){
        return $this->hasone(Oaupload::class,foreignKey: 'userid');
    }

    /*    Module 6 end*/

    public function reference_no (){
        return $this->hasOne(Referencen::class,foreignKey: 'userid');
    }

    public function year (){
        return $this->hasOne(Yeardd::class,foreignKey: 'userid');
    }

    public function quarter (){
        return $this->hasOne(Quarterdd::class,foreignKey: 'userid');
    }


   /* Transition*/
    public function eidm (){
        return $this->hasOne(TransitiontoMod2::class,foreignKey: 'userid');
    }

    public function ehwt (){
        return $this->hasOne(TransitiontoMod2::class,foreignKey: 'userid');
    }

/*Transition end*/


    /*Facility*/
    public function facility (){
        return $this->hasOne(Addfacility::class,foreignKey: 'userid');
    }
    public function addfacility (){
        return $this->hasOne(Addfacility::class,foreignKey: 'userid');
    }
    public function embregion (){
        return $this->hasOne(Addfacility::class,foreignKey: 'userid');
    }
    public function embid (){
        return $this->hasOne(Addfacility::class,foreignKey: 'userid');
    }
    public function establishment (){
        return $this->hasOne(Addfacility::class,foreignKey: 'userid');
    }
    public function street (){
        return $this->hasOne(Addfacility::class,foreignKey: 'userid');
    }
    public function baranggay (){
        return $this->hasOne(Addfacility::class,foreignKey: 'userid');
    }
    public function city (){
        return $this->hasOne(Addfacility::class,foreignKey: 'userid');
    }
    public function province (){
        return $this->hasOne(Addfacility::class,foreignKey: 'userid');
    }
    /*Facility end*/

}
