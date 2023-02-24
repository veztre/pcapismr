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
        Schema::create('oecondition', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('ECC_Condition');
            $table->string('Status_of_Compliance');
            $table->string('Actions_Taken');
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
        Schema::dropIfExists('oecondition');
    }
};
