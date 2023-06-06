<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('schoolyear_id')->nullable();
            $table->integer('student_id');
            $table->string('a1')->nullable();
            $table->string('a2')->nullable();
            $table->string('a3')->nullable();
            $table->string('a4')->nullable();
            $table->string('a5')->nullable();
            $table->string('a6')->nullable();
            $table->string('a7')->nullable();
            $table->string('a8')->nullable();
            $table->string('a9')->nullable();
            $table->string('b1')->nullable();
            $table->string('b2')->nullable();
            $table->string('b3')->nullable();
            $table->string('b4')->nullable();
            $table->string('b5')->nullable();
            $table->string('b6')->nullable();
            $table->string('b7')->nullable();
            $table->string('b8')->nullable();
            $table->string('b9')->nullable();
            $table->string('b10')->nullable();
            $table->string('b11')->nullable();
            $table->string('b12')->nullable();
            $table->string('b13')->nullable();
            $table->string('b14')->nullable();
            $table->string('b15')->nullable();
            $table->string('b16')->nullable();
            $table->string('b17')->nullable();
            $table->string('b18')->nullable();
            $table->string('c1')->nullable();
            $table->string('c2')->nullable();
            $table->string('c3')->nullable();
            $table->string('c4')->nullable();
            $table->string('c5')->nullable();
            // $table->string('d1')->nullable();
            // $table->string('d2')->nullable();
            // $table->string('d3')->nullable();
            // $table->string('d4')->nullable();
            // $table->string('d5')->nullable();
            // $table->string('d6')->nullable();
            // $table->string('d7')->nullable();
            // $table->string('d8')->nullable();
            // $table->string('d9')->nullable();
            // $table->string('d10')->nullable();
            // $table->string('d11')->nullable();
            // $table->string('d12')->nullable();
            // $table->string('d13')->nullable();
            // $table->string('d14')->nullable();
            // $table->string('d15')->nullable();
            // $table->string('e1')->nullable();
            // $table->string('e2')->nullable();
            // $table->string('e3')->nullable();
            // $table->string('e4')->nullable();
            // $table->string('e5')->nullable();
            // $table->string('e6')->nullable();
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
        Schema::dropIfExists('individual_inventories');
    }
}
