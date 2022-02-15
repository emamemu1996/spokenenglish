<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contactsetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('contactsetting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mobile');
            $table->string('email');
            $table->string('location');
            $table->string('des');
            $table->string('fbpagelink');
            $table->string('maplocation');
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
        //
    }
}
