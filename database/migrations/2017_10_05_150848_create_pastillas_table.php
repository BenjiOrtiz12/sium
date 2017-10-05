<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastillas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['tabletas','capsulas']);
            $table->enum('clasification',['bajo','normal','regular','alto','rp']);
            $table->string('name');
            $table->date('lote');
            $table->integer('cantidad');
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
        Schema::dropIfExists('pastillas');
    }
}
