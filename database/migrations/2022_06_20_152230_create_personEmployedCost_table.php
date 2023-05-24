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
        Schema::create('personEmployedCost', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('Month_1')->nullable();
            $table->string('Month_2')->nullable();
            $table->string('Month_3')->nullable();
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
        Schema::dropIfExists('personEmployedCost');
    }
};
