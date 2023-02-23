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

        Schema::create('detailreport', function (Blueprint $table) {


            $table->id();
            $table->string('userid');
            $table->string('FBE_No');
            $table->date('Date');
            $table->string('Flow_Rate_Ncm_day');
            $table->string('CO_mg_Ncm');
            $table->string('NOx_mg_Ncm');
            $table->string('Particulates_mg_Ncm');
            $table->string('SOx_mg_Ncm');



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
        Schema::dropIfExists('detailreport');
    }
};
