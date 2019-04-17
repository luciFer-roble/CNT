<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternetFijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internet_fijos', function (Blueprint $table) {
            $table->bigIncrements('id');                                 
            $table->string('name');                               
            $table->string('description',300);                               
            $table->string('img');
            $table->text('copy');
            $table->text('benefits');
            $table->text('conditions');                              
            $table->string('pdf_conditions');
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
        Schema::dropIfExists('internet_fijos');
    }
}
