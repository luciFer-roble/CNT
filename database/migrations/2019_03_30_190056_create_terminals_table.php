<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('brand');
            $table->string('description',300);
            $table->string('benefits');
            $table->text('copy');
            $table->string('state');
            $table->float('cash_price', 6, 2);
            $table->float('from_price', 6, 2);
            $table->string('screen_size');
            $table->string('front_cam');
            $table->string('back_cam');
            $table->string('os');
            $table->string('memory');
            $table->string('extensible_memory');
            $table->string('height');
            $table->string('width');
            $table->string('depth');
            $table->string('battery');
            $table->text('colors');
            $table->string('img');
            $table->string('home_img');
            $table->boolean('go_home'); 
            $table->unsignedBigInteger('updated_by')->default(null);
            $table->foreign('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('terminals');
    }
}
