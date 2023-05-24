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
            $table->string('Domestic_wastewater')->nullable();
            $table->string('Cooling_water')->nullable();
            $table->string('Waste_water_equipment')->nullable();
            $table->string('Processs_wastewater')->nullable();
            $table->string('others_n')->nullable();
            $table->string('others_m')->nullable();
            $table->string('Waste_water_floor')->nullable();
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
