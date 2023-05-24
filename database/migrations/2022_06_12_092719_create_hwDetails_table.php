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
            $table->string('HWno')->nullable();
            $table->string('HWclass')->nullable();
            $table->string('QtyOfHWTreated')->nullable();
            $table->string('Unit')->nullable();
            $table->string('TSDLocation')->nullable();
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
