<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aboutme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('aboutme', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title1');
            $table->string('title2');
            $table->string('des');
            $table->string('image');
            $table->string('downloadcv');
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
