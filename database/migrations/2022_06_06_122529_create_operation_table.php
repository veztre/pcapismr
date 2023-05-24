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
        Schema::create('operation', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('aveOPhours')->nullable();
            $table->string('aveOPdays')->nullable();
            $table->string('aveOPshift')->nullable();
            $table->string('maxOPhours')->nullable();
            $table->string('maxOPdays')->nullable();
            $table->string('maxOPshift')->nullable();

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
        Schema::dropIfExists('operation');
    }
};
