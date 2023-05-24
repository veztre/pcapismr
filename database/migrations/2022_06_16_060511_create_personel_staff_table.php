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
        Schema::create('personel_staff', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->date('date')->nullable();
            $table->string('Course_Training_Description')->nullable();
            $table->string('no_of_Personnel_Trained')->nullable();
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
        Schema::dropIfExists('personel_staff');
    }
};
