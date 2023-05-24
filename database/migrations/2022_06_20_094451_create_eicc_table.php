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
        Schema::create('eicc', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('Recyclable')->nullable();
            $table->string('Biodegradable')->nullable();
            $table->string('Residual')->nullable();
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
        Schema::dropIfExists('eicc');
    }
};
