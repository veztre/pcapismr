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
        Schema::create('a_a_qmonitoring_parameters', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('aaqname_parameter1')->nullable();
            $table->string('aaqname_parameter2')->nullable();
            $table->string('aaqname_parameter3')->nullable();
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
        Schema::dropIfExists('a_a_qmonitoring_parameters');
    }
};
