<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualInventoryThreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_inventory_threes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('individual_inventory_id')->nullable();
            $table->string('g1')->nullable();
            $table->string('g2')->nullable();
            $table->string('g3')->nullable();
            $table->string('g4')->nullable();
            $table->string('g5')->nullable();
            $table->string('g6')->nullable();
            $table->string('g7')->nullable();
            $table->string('g8')->nullable();
            $table->string('g9')->nullable();
            $table->string('g10')->nullable();
            $table->string('g11')->nullable();
            $table->string('g12')->nullable();
            $table->string('g13')->nullable();
            $table->string('g14')->nullable();
            $table->string('g15')->nullable();
            $table->string('h1')->nullable();
            $table->string('h2')->nullable();
            $table->string('h3')->nullable();
            $table->string('h4')->nullable();
            $table->string('h5')->nullable();
            $table->string('h6')->nullable();
            $table->string('h7')->nullable();
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
        Schema::dropIfExists('individual_inventory_threes');
    }
}
