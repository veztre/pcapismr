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
        Schema::create('hwGeneration', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('HWno')->nullable();
            $table->string('HWclass')->nullable();
            $table->string('HWNature')->nullable();
            $table->string('HWcataloguing')->nullable();
            $table->string('RemainingQty')->nullable();
            $table->string('PreviousReportUnit')->nullable();
            $table->string('HWGeneratedQty')->nullable();
            $table->string('QuarterUnit')->nullable();
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
        Schema::dropIfExists('hwGeneration');
    }
};
