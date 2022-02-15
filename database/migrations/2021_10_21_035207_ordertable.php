<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ordertable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ordertable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('planname');
            $table->string('planprice');
            $table->string('planservice1');
            $table->string('planservice2');
            $table->string('planservice3');
            $table->string('planservice4');
            $table->string('planservice5');
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
