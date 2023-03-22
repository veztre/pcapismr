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
        Schema::create('detail_parameter_value', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('value_parameter1')->nullable();
            $table->string('value_parameter2')->nullable();
            $table->string('value_parameter3')->nullable();
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
        Schema::dropIfExists('detail_parameter_value');
    }
};
