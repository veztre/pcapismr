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
        Schema::create('total_consumption_of_water', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('month1')->nullable();
            $table->string('month2')->nullable();
            $table->string('month3')->nullable();
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
        Schema::dropIfExists('total_consumption_of_water');
    }
};
