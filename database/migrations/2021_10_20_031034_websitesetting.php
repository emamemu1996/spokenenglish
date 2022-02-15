<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Websitesetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('websitesetting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('webtitle');
            $table->string('keyword');
            $table->string('des');
            $table->string('footerdes');
            $table->string('image');
            $table->string('exduration');
            $table->string('extitle');
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
