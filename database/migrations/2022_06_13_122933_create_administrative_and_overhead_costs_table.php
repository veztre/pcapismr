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
        Schema::create('administrative_and_overhead_costs', function (Blueprint $table) {
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
        Schema::dropIfExists('administrative_and_overhead_costs');
    }
};
