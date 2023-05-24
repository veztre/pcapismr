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
        Schema::create('aaqmonitoring', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('station_description')->nullable();
            $table->date('date')->nullable();
            $table->string('noise_level_db')->nullable();
            $table->string('CO_mg_ncm')->nullable();
            $table->string('NOx_mg_ncm')->nullable();
            $table->string('particulates_mg_ncm')->nullable();
            $table->string('Value_parameter1')->nullable();
            $table->string('Value_parameter2')->nullable();
            $table->string('Value_parameter3')->nullable();
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
        Schema::dropIfExists('aaqmonitoring');
    }
};
