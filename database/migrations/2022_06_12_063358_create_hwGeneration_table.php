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
            $table->string('HWno');
            $table->string('HWclass');
            $table->string('HWNature');
            $table->string('HWcataloguing');
            $table->string('RemainingQty');
            $table->string('PreviousReportUnit');
            $table->string('HWGeneratedQty');
            $table->string('QuarterUnit');
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
