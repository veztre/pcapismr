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
            $table->date('doneThis');
            $table->string('In');
            $table->string('name_signature_of_PCO');
            $table->string('Name_Signature_of_CEO_Managing_Head');
            $table->string('SUBSCRIBED_AND_SWORN');
            $table->date('dayOf');
            
            
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
        Schema::dropIfExists('oattatchment');
    }
};
