<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoissonIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boisson_ingredient', function (Blueprint $table) {
            $table->unsignedInteger('boisson_id');
            $table->unsignedInteger('ingredient_id');
            $table->integer('nbdose');
            $table->primary(['boisson_id', 'ingredient_id']);
            $table->foreign('boisson_id')->references('id')->on('boissons');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boisson_ingredient');
    }
}
