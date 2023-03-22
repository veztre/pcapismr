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
        Schema::create('addfacilities', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('embregion');
            $table->string('embid')->nullable();
            $table->string('establishment');
            $table->string('street');
            $table->string('baranggay');
            $table->string('city');
            $table->string('province');
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
        Schema::dropIfExists('addfacilities');
    }
};
