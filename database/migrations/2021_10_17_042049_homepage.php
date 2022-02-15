<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Homepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('slidesetting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slideimage')->nullable();
            $table->string('slidetext1')->nullable();
            $table->string('slidetext2')->nullable();
            $table->string('slidetext3')->nullable();
            $table->longText('slidebtnnam')->nullable();
            $table->string('slidebtnurl')->nullable();
            $table->string('logo')->nullable();
             $table->string('paylogo1')->nullable();
            $table->string('paylogo2')->nullable();
            $table->longText('paylogo3')->nullable();
            $table->string('paylogo4')->nullable();
            $table->string('paylogo5')->nullable();
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
