<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedassessmenttablefoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('needassessmenttablefours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('needs_assessment_inventory_id')->nullable();
            $table->string('a51a')->nullable();
            $table->string('a51b')->nullable();
            $table->string('a51c')->nullable();
            $table->string('a52a')->nullable();
            $table->string('a52b')->nullable();
            $table->string('a52c')->nullable();
            $table->string('a53a')->nullable();
            $table->string('a53b')->nullable();
            $table->string('a53c')->nullable();
            $table->string('a54a')->nullable();
            $table->string('a54b')->nullable();
            $table->string('a54c')->nullable();
            $table->string('a55a')->nullable();
            $table->string('a55b')->nullable();
            $table->string('a55c')->nullable();
            $table->string('a56a')->nullable();
            $table->string('a56b')->nullable();
            $table->string('a56c')->nullable();
            $table->string('a57a')->nullable();
            $table->string('a57b')->nullable();
            $table->string('a57c')->nullable();
            $table->string('a58a')->nullable();
            $table->string('a58b')->nullable();
            $table->string('a58c')->nullable();
            $table->string('a59a')->nullable();
            $table->string('a59b')->nullable();
            $table->string('a59c')->nullable();
            $table->string('a60a')->nullable();
            $table->string('a60b')->nullable();
            $table->string('a60c')->nullable();
            $table->string('a61a')->nullable();
            $table->string('a61b')->nullable();
            $table->string('a61c')->nullable();
            $table->string('a62a')->nullable();
            $table->string('a62b')->nullable();
            $table->string('a62c')->nullable();
            $table->string('a63a')->nullable();
            $table->string('a63b')->nullable();
            $table->string('a63c')->nullable();
            $table->string('a64a')->nullable();
            $table->string('a64b')->nullable();
            $table->string('a64c')->nullable();
            $table->string('a64d')->nullable();
            $table->string('a65a')->nullable();
            $table->string('a65b')->nullable();
            $table->string('a65c')->nullable();
            $table->string('a65d')->nullable();
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
        Schema::dropIfExists('needassessmenttablefours');
    }
}
