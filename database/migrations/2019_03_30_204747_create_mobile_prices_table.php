<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('cost', 5, 2);
            $table->float('gigs', 3, 1);
            $table->string('whatsapp');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('deezer');
            $table->string('minutes');
            $table->string('free_minutes');
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
        Schema::dropIfExists('mobile_prices');
    }
}
