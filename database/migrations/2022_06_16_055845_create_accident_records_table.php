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
        Schema::create('accident_records', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->date('date')->nullable();
            $table->string('Area_Location')->nullable();
            $table->string('Findings_and_Obeservations')->nullable();
            $table->string('Action_Taken')->nullable();
            $table->string('Remarks')->nullable();
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
        Schema::dropIfExists('accident_records');
    }
};
