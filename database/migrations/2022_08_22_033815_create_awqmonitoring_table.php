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
        Schema::create('awqmonitoring', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('name4');
            $table->string('name5');
            $table->string('name6');
            $table->string('name7');
            $table->string('name8');
            $table->string('unit1');
            $table->string('unit2');
            $table->string('unit3');
            $table->string('unit4');
            $table->string('unit5');
            $table->string('unit6');
            $table->string('unit7');
            $table->string('unit8');
            $table->timestamps();
        });
        Schema::create('awqmonitoring1', function (Blueprint $table) {

            $table->id();
            $table->integer('userid');
            $table->string('Outlet_No');
            $table->date('Date');
            $table->string('value1');
            $table->string('value2');
            $table->string('value3');
            $table->string('value4');
            $table->string('value5');
            $table->string('value6');
            $table->string('value7');
            $table->string('value8');
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
        Schema::dropIfExists('awqmonitoring');
        Schema::dropIfExists('awqmonitoring1');
    }

};
