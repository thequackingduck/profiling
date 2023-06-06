<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedassessmenttablethreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('needassessmenttablethrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('needs_assessment_inventory_id')->nullable();
            $table->string('a41a')->nullable();
            $table->string('a41b')->nullable();
            $table->string('a41c')->nullable();
            $table->string('a42a')->nullable();
            $table->string('a42b')->nullable();
            $table->string('a42c')->nullable();
            $table->string('a43a')->nullable();
            $table->string('a43b')->nullable();
            $table->string('a43c')->nullable();
            $table->string('a44a')->nullable();
            $table->string('a44b')->nullable();
            $table->string('a44c')->nullable();
            $table->string('a45a')->nullable();
            $table->string('a45b')->nullable();
            $table->string('a45c')->nullable();
            $table->string('a46a')->nullable();
            $table->string('a46b')->nullable();
            $table->string('a46c')->nullable();
            $table->string('a47a')->nullable();
            $table->string('a47b')->nullable();
            $table->string('a47c')->nullable();
            $table->string('a48a')->nullable();
            $table->string('a48b')->nullable();
            $table->string('a48c')->nullable();
            $table->string('a49a')->nullable();
            $table->string('a49b')->nullable();
            $table->string('a49c')->nullable();
            $table->string('a50a')->nullable();
            $table->string('a50b')->nullable();
            $table->string('a50c')->nullable();
            $table->string('a50d')->nullable();
            $table->string('a50e')->nullable();
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
        Schema::dropIfExists('needassessmenttablethrees');
    }
}
