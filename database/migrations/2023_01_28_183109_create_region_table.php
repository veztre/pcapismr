<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Region;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region', function (Blueprint $table) {
            $table->id();
            $table->string('regionname');
            $table->timestamps();

        });
        $data = array(
            [
                'regionname'=>'REGION I (ILOCOS REGION)',
            ],
            [
                'regionname'=>'REGION II (CAGAYAN VALLEY)',
            ],
            [
                'regionname'=>'REGION III (CENTRAL LUZON)',
            ],
            [
                'regionname'=>'REGION IV-A (CALABARZON)',
            ],
            [
                'regionname'=>'REGION IV-B (MIMAROPA)',
            ],
            [
                'regionname'=>'REGION V (BICOL REGION)',
            ],
            [
                'regionname'=>'REGION VI (WESTERN VISAYAS)',
            ],
            [
                'regionname'=>'REGION VII (CENTRAL VISAYAS)',
            ],
            [
                'regionname'=>'REGION VIII (EASTERN VISAYAS)',
            ],
            [
                'regionname'=>'REGION IX (ZAMBOANGA PENINSULA)',
            ],
            [
                'regionname'=>'REGION X (NORTHERN MINDANAO)',
            ],
            [
                'regionname'=>'REGION XI (DAVAO REGION)',
            ],
            [
                'regionname'=>'REGION XII (SOCCSKSARGEN)',
            ],
            [
                'regionname'=>'NATIONAL CAPITAL REGION (NCR)',
            ],
            [
                'regionname'=>'CORDILLERA ADMINISTRATIVE REGION (CAR)',
            ],
            [
                'regionname'=>'AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)',
            ],
            [
                'regionname'=>'REGION XIII (Caraga)',
            ],
        );
        foreach ($data as $datum){
            $region = new Region();
            $region->regionname = $datum['regionname'];
            $region->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('region');
    }
};
