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
        Schema::create('drowcfop', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('name1')->nullable();
            $table->string('name2')->nullable();
            $table->string('name3')->nullable();
            $table->string('name4')->nullable();
            $table->string('name5')->nullable();
            $table->string('name6')->nullable();
            $table->string('name7')->nullable();
            $table->string('unit1')->nullable();
            $table->string('unit2')->nullable();
            $table->string('unit3')->nullable();
            $table->string('unit4')->nullable();
            $table->string('unit5')->nullable();
            $table->string('unit6')->nullable();
            $table->string('unit7')->nullable();
            $table->timestamps();
        });


        Schema::create('drowcfop1', function (Blueprint $table) {

            $table->id();
            $table->integer('userid');

            $table->string('Outlet_No');
            $table->date('Date');
            $table->string('Effluent_Flow_Rate_m3_day');
            $table->string('value1');
            $table->string('value2');
            $table->string('value3');
            $table->string('value4');
            $table->string('value5');
            $table->string('value6');
            $table->string('value7');
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
        Schema::dropIfExists('drowcfop');
        Schema::dropIfExists('drowcfop1');
    }
};
