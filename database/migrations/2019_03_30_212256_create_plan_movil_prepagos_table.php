<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanMovilPrepagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_movil_prepagos', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('name'); 
            $table->text('copy');         
            $table->string('description',300);  
            $table->text('benefits'); 
            $table->float('price', 6, 2);
            $table->float('iva', 6, 2);
            $table->float('ice', 6, 2); 
            $table->text('conditions');
            $table->string('img');
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
        Schema::dropIfExists('plan_movil_prepagos');
    }
}
