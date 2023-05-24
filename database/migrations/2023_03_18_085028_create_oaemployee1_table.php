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
        Schema::create('oaemployee1', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('name1')->nullable();
            $table->string('id_no1')->nullable();
            $table->string('IssuedAt1')->nullable();
            $table->string('IssuedOn1')->nullable();
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
        Schema::dropIfExists('oaemployee1');
    }
};
