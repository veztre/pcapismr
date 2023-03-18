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
            $table->string('userid');
            $table->string('name1');
            $table->string('id_no1');
            $table->string('IssuedAt1');
            $table->string('IssuedOn1');
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
