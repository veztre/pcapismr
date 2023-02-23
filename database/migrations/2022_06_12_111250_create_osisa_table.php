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
        Schema::create('osisa', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->date('DateConducted');
            $table->string('PremisesAreaInspected');
            $table->string('FindingsAndObservations');
            $table->string('CorrectiveActionsTaken');
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
        Schema::dropIfExists('osisa');
    }
};
