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
            $table->string('FBE_No')->nullable();
            $table->date('Date')->nullable();
            $table->string('Flow_Rate_Ncm_day')->nullable();
            $table->string('CO_mg_Ncm')->nullable();
            $table->string('NOx_mg_Ncm')->nullable();
            $table->string('Particulates_mg_Ncm')->nullable();
            $table->string('SOx_mg_Ncm')->nullable();



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
