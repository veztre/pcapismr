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
     public function gic(){
        return $this->hasOne(Gic::class);
    }
     public function aircon(){
        return $this->hasOne(Aircon::class);
    }

     public function denrid(){
        return $this->hasOne(Denrid::class);
    }
     public function transportedReg(){
        return $this->hasOne(TransporterReg::class);
    }

     public function tsdreg(){
        return $this->hasOne(Tsdreg::class);
    }
     public function acno(){
        return $this->hasOne(Acno::class);
    }
    public function operation(){
        return $this->hasOne(Operation::class);
    }

     public function production(){
        return $this->hasOne(Production::class);
    }


    public function dpno(){
        return $this->hasMany(Dpno::class);
    }

    public function cncno(){
        return $this->hasMany(Cncno::class);
    }

    public function ccoreg(){
        return $this->hasMany(Ccoreg::class);
    }
    public function import(){
        return $this->hasMany(Import::class);
    }
    public function permit(){
        return $this->hasMany(Permmit::class);
    }

    public function smallquan(){
        return $this->hasMany(Smallquan::class);
    }
    public function priority(){
        return $this->hasMany(Priority::class);
    }
    public function piccs(){
        return $this->hasMany(Piccs::class);
    }
    public function pmpin(){
        return $this->hasMany(Pmpin::class);
    }
    public function pono(){
        return $this->hasMany(Pono::class);
    }

   /* Module1 end*/

    /*Module 2 start*/
    public function hwDetails(){
        return $this->hasMany(HWDetails::class);
    }

    public function hwGeneration(){
        return $this->hasMany(HwGeneration::class);
    }

    public function storage(){
        return $this->hasMany(Storage::class);
    }
    public function transporter(){
        return $this->hasMany(Transporter::class);
    }
    public function treater(){
        return $this->hasMany(Treater::class);
    }
    public function disposal(){
        return $this->hasMany(Disposal::class);
    }
    public function osisa(){
        return $this->hasMany(Osisa::class);
    }

    /*Module 2 end*/

/*    Module 3 start*/
    public function waterpolutiondata(){
        return $this->hasOne(WaterPolutionData::class);
    }

    public function personEmployed(){
        return $this->hasOne(PersonEmployed::class);
    }
    public function personEmployedCost(){
        return $this->hasOne(PersonEmployedCost::class);
    }
    public function costofchemical(){
        return $this->hasOne(CostOfChemical::class);
    }
    public function utilitycost(){
        return $this->hasOne(UtilityCost::class);
    }
    public function administrativecosts(){
        return $this->hasOne(AdministrativeCost::class);
    }
    public function costofoperating(){
        return $this->hasOne(CostOfOperating::class);
    }
    public function newinvestment(){
        return $this->hasOne(NewInvestment::class);
    }
    public function costofnew (){
        return $this->hasOne(CostOfNew::class);
    }
    public function drowcfop (){
        return $this->hasOne(Drowcfop::class);
    }

    public function dischargeLocation(){
        return $this->hasMany(DischargeLocation::class);
    }

    public function dreportofwaste(){
        return $this->hasMany(DreportofWaste::class);
    }

    public function drowcfop1(){
        return $this->hasMany(Drowcfop1::class);
    }

    /*Module 3 End */

    /*Module4 start*/
    public function summary1(){
        return $this->hasMany(Summary1::class);
    }
    public function summary2(){
        return $this->hasMany(Summary2::class);
    }
    public function summary3(){
        return $this->hasMany(Summary3::class);
    }

    public function cost_of_person_employed (){
        return $this->hasOne(Cost_of_person_employed::class);
    }
    public function total_consumption_of_water (){
        return $this->hasOne(Total_Consumption_of_Water::class);
    }
    public function total_cost_of_chemicals_used (){
        return $this->hasOne(Total_Cost_of_Chemicals_used::class);
    }
    public function total_consumption_of_electricity (){
        return $this->hasOne(Total_Consumption_of_Electricity::class);
    }
    public function administrative_and_overhead_costs (){
        return $this->hasOne(Administrative_and_Overhead_Costs::class);
    }
    public function cost_of_operating_in_house_laboratory (){
        return $this->hasOne(Cost_of_operating_in_house_laboratory::class);
    }
    public function improvement_or_modification (){
        return $this->hasOne(Improvement_or_modification::class);
    }
    public function cost_of_improvement_of_modification (){
        return $this->hasOne(Cost_of_improvement_of_modification::class);
    }
    public function detailreport (){
        return $this->hasOne(DetailReport::class);
    }


    /*Module 4 end*/


/*    Module 5 start*/
    public function evmpprogram (){
        return $this->hasOne(EVMPprogram::class);
    }
    public function aqg (){
        return $this->hasOne(AQG::class);
    }
    public function tqg (){
        return $this->hasOne(TQG::class);
    }
    public function aqc (){
        return $this->hasOne(AQC::class);
    }
    public function tqc (){
        return $this->hasOne(TQC::class);
    }
    public function eicc (){
        return $this->hasOne(EICC::class);
    }
    public function description (){
        return $this->hasOne(Description::class);
    }
    public function awqmonitoring1 (){
        return $this->hasOne(Awqmonitoring1::class);
    }
    public function awqmonitoring (){
        return $this->hasOne(Awqmonitoring::class);
    }

    public function aaqmonitoring (){
        return $this->hasmany(AAQmonitoring::class);
    }
    public function oecondition (){
        return $this->hasmany(OECondition::class);
    }
/*    Module 5 end*/


/*    Module 6 start*/

/*    Module 6 end*/

}
