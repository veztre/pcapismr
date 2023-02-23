<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waterpolutiondata', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('Domestic_wastewater');
            $table->string('Cooling_water');
            $table->string('Waste_water_equipment');
            $table->string('Processs_wastewater');
            $table->string('others_n');
            $table->string('others_m');
            $table->string('Waste_water_floor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waterpolutiondata');
    }
};
