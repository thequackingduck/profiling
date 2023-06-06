<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leavers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('schoolyear_id')->nullable();
            $table->integer('student_id');
            $table->integer('c1')->dafault(0);
            $table->integer('c2')->dafault(0);
            $table->integer('c3')->dafault(0);
            $table->integer('c4')->dafault(0);
            $table->integer('c5')->dafault(0);
            $table->integer('c6')->dafault(0);
            $table->integer('c7')->dafault(0);
            $table->integer('c8')->dafault(0);
            $table->integer('c9')->dafault(0);
            $table->integer('c10')->dafault(0);
            $table->integer('c11')->dafault(0);
            $table->integer('c12')->dafault(0);
            $table->integer('c13')->dafault(0);
            $table->integer('c14')->dafault(0);
            $table->integer('c15')->dafault(0);
            $table->integer('c16')->dafault(0);
            $table->integer('c17')->dafault(0);
            $table->integer('c18')->dafault(0);
            $table->integer('c19')->dafault(0);
            $table->integer('c20')->dafault(0);
            $table->integer('c21')->dafault(0);
            $table->string('others')->nullable();
            $table->longtext('details')->nullable();
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
        Schema::dropIfExists('leavers');
    }
}
