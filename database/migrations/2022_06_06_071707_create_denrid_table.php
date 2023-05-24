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
        Schema::create('denrid', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('permit')->nullable();
            $table->date('dateIssued')->nullable();
            $table->date('dateExpired')->nullable();
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
        Schema::dropIfExists('denrid');
    }
};
