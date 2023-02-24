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
            $table->date('date');
            $table->string('Course_Training_Description');
            $table->string('no_of_Personnel_Trained');
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
