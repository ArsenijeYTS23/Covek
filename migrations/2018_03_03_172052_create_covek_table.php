<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCovekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coveks', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('godine_id');
            $table->integer('brak_id');
            $table->integer('obrazovanje_id');
            $table->integer('primanja_id');
            $table->integer('mesto_id');
            $table->integer('deca_id');
            $table->integer('veroispovest_id');
            $table->integer('politika_id');
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
        Schema::dropIfExists('covek');
    }
}
