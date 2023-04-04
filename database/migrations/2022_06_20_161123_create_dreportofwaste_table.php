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
            $table->string('Outlet_No');
            $table->date('date');
            $table->string('Effluent_Flow_Rate');
            $table->string('BOD_mg_L');
            $table->string('TSS_mg_L');
            $table->string('Color');
            $table->string('pH');
            $table->string('Oil_Grease_mg_L');
            $table->string('Temp_Rise');
            $table->string('Add_parameter');
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
