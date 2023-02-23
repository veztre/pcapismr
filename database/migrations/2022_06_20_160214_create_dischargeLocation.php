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
        Schema::create('dischargeLocation', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('Outlet_Number');
            $table->string('Location_of_Outlet');
            $table->string('Name_of_Receiving_water_body');
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
        Schema::dropIfExists('dischargeLocation');
    }
};
