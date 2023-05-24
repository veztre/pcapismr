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
        Schema::create('oattachment', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->date('doneThis')->nullable();
            $table->string('In')->nullable();
            $table->string('name_signature_of_PCO')->nullable();
            $table->string('Name_Signature_of_CEO_Managing_Head')->nullable();
            $table->string('SUBSCRIBED_AND_SWORN')->nullable();
            $table->date('dayOf')->nullable();


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
        Schema::dropIfExists('oattachment');
    }

};
