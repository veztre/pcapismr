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
        Schema::create('summary1', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('Process_Equipment')->nullable();
            $table->string('Location')->nullable();
            $table->string('no_of_hours_of_operation_for_the_quarter')->nullable();
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
        Schema::dropIfExists('summary1');
    }
};
