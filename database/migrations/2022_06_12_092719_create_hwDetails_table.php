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
        Schema::create('hwDetails', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('HWno');
            $table->string('HWclass');
            $table->string('QtyOfHWTreated');
            $table->string('Unit');
            $table->string('TSDLocation');
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
        Schema::dropIfExists('hwDetails');
    }
};
