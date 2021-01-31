<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->double('preco', 8, 2);
            $table->unsignedBigInteger('paciente_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('exames', function(Blueprint $table){
            $table->foreign('paciente_id')->references('id')->on('patients')->onDelete('cascade');   

        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exames');
    }
}
