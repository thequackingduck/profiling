<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedassessmenttabletwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('needassessmenttabletwos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('needs_assessment_inventory_id')->nullable();
            $table->string('a21a')->nullable();
            $table->string('a21b')->nullable();
            $table->string('a21c')->nullable();
            $table->string('a22a')->nullable();
            $table->string('a22b')->nullable();
            $table->string('a22c')->nullable();
            $table->string('a23a')->nullable();
            $table->string('a23b')->nullable();
            $table->string('a23c')->nullable();
            $table->string('a24a')->nullable();
            $table->string('a24b')->nullable();
            $table->string('a24c')->nullable();
            $table->string('a25a')->nullable();
            $table->string('a25b')->nullable();
            $table->string('a25c')->nullable();
            $table->string('a26a')->nullable();
            $table->string('a26b')->nullable();
            $table->string('a26c')->nullable();
            $table->string('a27a')->nullable();
            $table->string('a27b')->nullable();
            $table->string('a27c')->nullable();
            $table->string('a28a')->nullable();
            $table->string('a28b')->nullable();
            $table->string('a28c')->nullable();
            $table->string('a29a')->nullable();
            $table->string('a29b')->nullable();
            $table->string('a29c')->nullable();
            $table->string('a30a')->nullable();
            $table->string('a30b')->nullable();
            $table->string('a30c')->nullable();
            $table->string('a30d')->nullable();
            $table->string('a31a')->nullable();
            $table->string('a31b')->nullable();
            $table->string('a31c')->nullable();
            $table->string('a32a')->nullable();
            $table->string('a32b')->nullable();
            $table->string('a32c')->nullable();
            $table->string('a33a')->nullable();
            $table->string('a33b')->nullable();
            $table->string('a33c')->nullable();
            $table->string('a34a')->nullable();
            $table->string('a34b')->nullable();
            $table->string('a34c')->nullable();
            $table->string('a35a')->nullable();
            $table->string('a35b')->nullable();
            $table->string('a35c')->nullable();
            $table->string('a36a')->nullable();
            $table->string('a36b')->nullable();
            $table->string('a36c')->nullable();
            $table->string('a37a')->nullable();
            $table->string('a37b')->nullable();
            $table->string('a37c')->nullable();
            $table->string('a38a')->nullable();
            $table->string('a38b')->nullable();
            $table->string('a38c')->nullable();
            $table->string('a39a')->nullable();
            $table->string('a39b')->nullable();
            $table->string('a39c')->nullable();
            $table->string('a40a')->nullable();
            $table->string('a40b')->nullable();
            $table->string('a40c')->nullable();
            $table->string('a40d')->nullable();
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
        Schema::dropIfExists('needassessmenttabletwos');
    }
}
