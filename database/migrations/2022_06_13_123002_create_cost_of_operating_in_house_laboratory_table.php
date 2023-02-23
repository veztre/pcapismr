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
        Schema::create('cost_of_operating_in_house_laboratory', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('month1');
            $table->string('month2');
            $table->string('month3');
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
        Schema::dropIfExists('cost_of_operating_in_house_laboratory');
    }
};
