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
        Schema::create('dreportofwaste', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('Outlet_No')->nullable();
            $table->date('date')->nullable();
            $table->string('Effluent_Flow_Rate')->nullable();
            $table->string('BOD_mg_L')->nullable();
            $table->string('TSS_mg_L')->nullable();
            $table->string('Color')->nullable();
            $table->string('pH')->nullable();
            $table->string('Oil_Grease_mg_L')->nullable();
            $table->string('Temp_Rise')->nullable();
            $table->string('Add_parameter')->nullable();
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
        Schema::dropIfExists('dreportofwaste');
    }
};
