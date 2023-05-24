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
        Schema::create('oaemployee', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('name')->nullable();
            $table->string('id_no')->nullable();
            $table->string('IssuedAt')->nullable();
            $table->string('IssuedOn')->nullable();
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
        Schema::dropIfExists('oaemployee');
    }
};
