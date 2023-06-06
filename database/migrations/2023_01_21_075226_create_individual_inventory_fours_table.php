<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualInventoryFoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_inventory_fours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('individual_inventory_id')->nullable();
            $table->string('i1')->nullable();
            $table->string('i2')->nullable();
            $table->string('i3')->nullable();
            $table->string('i4')->nullable();
            $table->string('i5')->nullable();
            $table->string('i6')->nullable();
            $table->string('i7')->nullable();
            $table->string('i8')->nullable();
            $table->string('i9')->nullable();
            $table->string('i10')->nullable();
            $table->string('i11')->nullable();
            $table->string('i12')->nullable();
            $table->string('i13')->nullable();
            $table->string('i14')->nullable();
            $table->string('i15')->nullable();
            $table->string('i16')->nullable();
            $table->string('i17')->nullable();
            $table->string('i18')->nullable();
            $table->string('i19')->nullable();
            $table->string('i20')->nullable();
            $table->string('i21')->nullable();
            $table->string('i22')->nullable();
            $table->string('i23')->nullable();
            $table->string('i24')->nullable();
            $table->string('i25')->nullable();
            $table->string('j1')->nullable();
            $table->string('j2')->nullable();
            $table->string('j3')->nullable();
            $table->string('j4')->nullable();
            $table->string('j5')->nullable();
            $table->string('k1')->nullable();
            $table->string('k2')->nullable();
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
        Schema::dropIfExists('individual_inventory_fours');
    }
}
