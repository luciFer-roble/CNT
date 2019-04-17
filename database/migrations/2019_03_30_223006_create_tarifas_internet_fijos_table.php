<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifasInternetFijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifas_internet_fijos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('internet_plan_id')->default(null);
            $table->foreign('internet_plan_id')->references('id')->on('internet_fijos');
            $table->string('name');
            $table->string('type');
            $table->string('technology')->nullable();
            $table->float('iva', 6, 2);
            $table->float('ice', 6, 2);
            $table->float('cost', 6, 2);
            $table->integer('download');
            $table->integer('upload');
            $table->float('instalation_cost', 6, 2);
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
        Schema::dropIfExists('tarifas_internet_fijos');
    }
}
