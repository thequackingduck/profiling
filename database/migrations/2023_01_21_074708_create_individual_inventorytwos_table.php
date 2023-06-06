<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualInventorytwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_inventorytwos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('individual_inventory_id')->nullable();
            $table->string('d1')->nullable();
            $table->string('d2')->nullable();
            $table->string('d3')->nullable();
            $table->string('d4')->nullable();
            $table->string('d5')->nullable();
            $table->string('d6')->nullable();
            $table->string('d7')->nullable();
            $table->string('d8')->nullable();
            $table->string('d9')->nullable();
            $table->string('d10')->nullable();
            $table->string('d11')->nullable();
            $table->string('d12')->nullable();
            $table->string('d13')->nullable();
            $table->string('d14')->nullable();
            $table->string('d15')->nullable();
            $table->string('e1')->nullable();
            $table->string('e2')->nullable();
            $table->string('e3')->nullable();
            $table->string('e4')->nullable();
            $table->string('e5')->nullable();
            $table->string('e6')->nullable();
            $table->string('f1')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3')->nullable();
            $table->string('f4')->nullable();
            $table->string('f5')->nullable();
            $table->string('f6')->nullable();
            $table->string('f7')->nullable();
            $table->string('f8')->nullable();
            $table->string('f9')->nullable();
            $table->string('f10')->nullable();
            $table->string('f11')->nullable();
            $table->string('f12')->nullable();
            $table->string('f13')->nullable();
            $table->string('f14')->nullable();
            $table->string('f15')->nullable();
            $table->string('f16')->nullable();
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
        Schema::dropIfExists('individual_inventorytwos');
    }
}
