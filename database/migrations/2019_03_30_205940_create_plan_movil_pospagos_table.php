<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanMovilPospagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('plan_movil_pospagos', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('name'); 
            $table->text('copy');         
            $table->string('description',300);  
            $table->text('benefits');  
            $table->string('img');           
            $table->string('conditions');           
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
        Schema::dropIfExists('plan_movil_pospagos');
    }
}
