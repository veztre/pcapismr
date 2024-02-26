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

    public function plant()
    {
        return $this->hasOne(Plant::class, 'userid');
    }

     public function gic(){
        return $this->hasOne(Gic::class, 'userid');
    }
     public function aircon(){
        return $this->hasOne(Aircon::class, 'userid');
    }

     public function denrid(){
        return $this->hasOne(Denrid::class, 'userid');
    }
     public function transporterReg(){
        return $this->hasOne(TransporterReg::class, 'userid');
    }

     public function tsdreg(){
        return $this->hasOne(Tsdreg::class, 'userid');
    }
     public function acno(){
        return $this->hasOne(Acno::class, 'userid');
    }
    public function operation(){
        return $this->hasOne(Operation::class, 'userid');
    }

     public function production(){
        return $this->hasOne(Production::class, 'userid');
    }


    public function dpno(){
        return $this->hasMany(Dpno::class, 'userid');
    }

    public function cncno(){
        return $this->hasMany(Cncno::class,'userid');
    }

    public function ccoreg(){
        return $this->hasMany(Ccoreg::class, 'userid');
    }
    public function import(){
        return $this->hasMany(Import::class, 'userid');
    }
    public function permit(){
        return $this->hasMany(Permmit::class, 'userid');
    }

    public function smallquan(){
        return $this->hasMany(Smallquan::class, 'userid');
    }
    public function priority(){
        return $this->hasMany(Priority::class, 'userid');
    }
    public function piccs(){
        return $this->hasMany(Piccs::class, 'userid');
    }
    public function pmpin(){
        return $this->hasMany(Pmpin::class, 'userid');
    }
    public function pono(){
        return $this->hasMany(Pono::class, 'userid');
    }

   /* Module1 end*/

    /*Module 2 start*/
    public function hwDetails(){
        return $this->hasMany(HWDetails::class, 'userid');
    }

    public function hwGeneration(){
        return $this->hasMany(HwGeneration::class, 'userid');
    }

    public function storage(){
        return $this->hasMany(Storage::class, 'userid');
    }
    public function transporter(){
        return $this->hasMany(Transporter::class, 'userid');
    }
    public function treater(){
        return $this->hasMany(Treater::class, 'userid');
    }
    public function disposal(){
        return $this->hasMany(Disposal::class, 'userid');
    }
    public function osisa(){
        return $this->hasMany(Osisa::class, 'userid');
    }

    /*Module 2 end*/

/*    Module 3 start*/
    public function waterpolutiondata(){
        return $this->hasOne(WaterPolutionData::class, 'userid');
    }

    public function personEmployed(){
        return $this->hasOne(PersonEmployed::class, 'userid');
    }
    public function personEmployedCost(){
        return $this->hasOne(PersonEmployedCost::class, 'userid');
    }
    public function costofchemical(){
        return $this->hasOne(CostOfChemical::class, 'userid');
    }
    public function utilitycost(){
        return $this->hasOne(UtilityCost::class, 'userid');
    }
    public function administrativecosts(){
        return $this->hasOne(AdministrativeCost::class, 'userid');
    }
    public function costofoperating(){
        return $this->hasOne(CostOfOperating::class, 'userid');
    }
    public function newinvestment(){
        return $this->hasOne(NewInvestment::class, 'userid');
    }
    public function costofnew (){
        return $this->hasOne(CostOfNew::class, 'userid');
    }
    public function drowcfop (){
        return $this->hasOne(Drowcfop::class, 'userid');
    }

    public function dischargeLocation(){
        return $this->hasMany(DischargeLocation::class, 'userid');
    }

    public function dreportofwaste(){
        return $this->hasMany(DreportofWaste::class, 'userid');
    }

    public function drowcfop1(){
        return $this->hasMany(Drowcfop1::class, 'userid');
    }

    /*New parameter*/
    public function dreportofwaste_parameter (){
        return $this->hasOne(DreportofWaste_parameter::class, 'userid');
    }
    /*Module 3 End */

    /*Module4 start*/
    public function summary1(){
        return $this->hasMany(Summary1::class, 'userid');
    }
    public function summary2(){
        return $this->hasMany(Summary2::class, 'userid');
    }
    public function summary3(){
        return $this->hasMany(Summary3::class, 'userid');
    }

    public function cost_of_person_employed (){
        return $this->hasMany(Cost_of_person_employed::class, 'userid');
    }
    public function total_consumption_of_water (){
        return $this->hasMany(Total_Consumption_of_Water::class, 'userid');
    }
    public function total_cost_of_chemicals_used (){
        return $this->hasMany(Total_Cost_of_Chemicals_used::class, 'userid');
    }
    public function total_consumption_of_electricity (){
        return $this->hasMany(Total_Consumption_of_Electricity::class, 'userid');
    }
    public function administrative_and_overhead_costs (){
        return $this->hasMany(Administrative_and_Overhead_Costs::class, 'userid');
    }
    public function cost_of_operating_in_house_laboratory (){
        return $this->hasMany(Cost_of_operating_in_house_laboratory::class, 'userid');
    }
    public function improvement_or_modification (){
        return $this->hasMany(Improvement_or_modification::class, 'userid');
    }
    public function cost_of_improvement_of_modification (){
        return $this->hasMany(Cost_of_improvement_of_modification::class, 'userid');
    }
    public function detailreport (){
        return $this->hasMany(DetailReport::class, 'userid');
    }
    public function detail_parameter (){
        return $this->hasOne(DetailParameter::class, 'userid');
    }

    public function detail_parameter_value (){
        return $this->hasOne(DetailParameterValue::class, 'userid');
    }
    /*Module 4 end*/


/*    Module 5 start*/
    public function evmpprogram (){
        return $this->hasOne(EVMPprogram::class, 'userid');
    }
    public function aqg (){
        return $this->hasOne(AQG::class, 'userid');
    }
    public function tqg (){
        return $this->hasOne(TQG::class, 'userid');
    }
    public function aqc (){
        return $this->hasOne(AQC::class, 'userid');
    }
    public function tqc (){
        return $this->hasOne(TQC::class, 'userid');
    }
    public function eicc (){
        return $this->hasOne(EICC::class, 'userid');
    }
    public function description (){
        return $this->hasOne(Description::class, 'userid');
    }
    public function awqmonitoring1 (){
        return $this->hasOne(Awqmonitoring1::class, 'userid');
    }
    public function awqmonitoring (){
        return $this->hasOne(Awqmonitoring::class, 'userid');
    }
    public function aaqmonitoring_parameter (){
        return $this->hasOne(AAQmonitoring_parameter::class, 'userid');
    }
    public function aaqmonitoring (){
        return $this->hasmany(AAQmonitoring::class, 'userid');
    }
    public function oecondition (){
        return $this->hasmany(OECondition::class, 'userid');
    }
/*    Module 5 end*/


/*    Module 6 start*/
    public function accident_records (){
        return $this->hasmany(AccidentRecord::class, 'userid');
    }

    public function personel_staff (){
        return $this->hasmany(PersonelStaff::class, 'userid');
    }
    public function oattachment (){
        return $this->hasone(Oattachment::class, 'userid');
    }
    public function oaemployee (){
        return $this->hasone(Oaemployee::class, 'userid');
    }
    public function oaemployee1 (){
        return $this->hasone(Oaemployee1::class, 'userid');
    }
    public function oaupload (){
        return $this->hasone(Oaupload::class, 'userid');
    }

    /*    Module 6 end*/

    public function reference_no (){
        return $this->hasOne(Referencen::class, 'userid');
    }

    public function year (){
        return $this->hasOne(Yeardd::class, 'userid');
    }

    public function quarter (){
        return $this->hasOne(Quarterdd::class, 'userid');
    }


   /* Transition*/
    public function eidm (){
        return $this->hasOne(TransitiontoMod2::class, 'userid');
    }

    public function ehwt (){
        return $this->hasOne(TransitiontoMod2::class, 'userid');
    }

/*Transition end*/


    /*Facility*/
    public function addfacility (){
        return $this->hasMany(Addfacility::class, 'userid');
    }

    /*Facility end*/




    public function isAdmin()
    {
        return $this->usertype === 'admin';
    }

    public function isTrainee()
    {
        return $this->usertype === 'trainee';
    }

}
