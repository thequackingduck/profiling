<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedsAssessmentInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('needs_assessment_inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('schoolyear_id')->nullable();
            $table->integer('student_id');
            $table->string('a1a')->nullable();
            $table->string('a1b')->nullable();
            $table->string('a1c')->nullable();
            $table->string('a2a')->nullable();
            $table->string('a2b')->nullable();
            $table->string('a2c')->nullable();
            $table->string('a3a')->nullable();
            $table->string('a3b')->nullable();
            $table->string('a3c')->nullable();
            $table->string('a4a')->nullable();
            $table->string('a4b')->nullable();
            $table->string('a4c')->nullable();
            $table->string('a5a')->nullable();
            $table->string('a5b')->nullable();
            $table->string('a5c')->nullable();
            $table->string('a6a')->nullable();
            $table->string('a6b')->nullable();
            $table->string('a6c')->nullable();
            $table->string('a7a')->nullable();
            $table->string('a7b')->nullable();
            $table->string('a7c')->nullable();
            $table->string('a8a')->nullable();
            $table->string('a8b')->nullable();
            $table->string('a8c')->nullable();
            $table->string('a9a')->nullable();
            $table->string('a9b')->nullable();
            $table->string('a9c')->nullable();
            $table->string('a10a')->nullable();
            $table->string('a10b')->nullable();
            $table->string('a10c')->nullable();
            $table->string('a10d')->nullable();
            $table->string('a11a')->nullable();
            $table->string('a11b')->nullable();
            $table->string('a11c')->nullable();
            $table->string('a12a')->nullable();
            $table->string('a12b')->nullable();
            $table->string('a12c')->nullable();
            $table->string('a13a')->nullable();
            $table->string('a13b')->nullable();
            $table->string('a13c')->nullable();
            $table->string('a14a')->nullable();
            $table->string('a14b')->nullable();
            $table->string('a14c')->nullable();
            $table->string('a15a')->nullable();
            $table->string('a15b')->nullable();
            $table->string('a15c')->nullable();
            $table->string('a16a')->nullable();
            $table->string('a16b')->nullable();
            $table->string('a16c')->nullable();
            $table->string('a17a')->nullable();
            $table->string('a17b')->nullable();
            $table->string('a17c')->nullable();
            $table->string('a18a')->nullable();
            $table->string('a18b')->nullable();
            $table->string('a18c')->nullable();
            $table->string('a19a')->nullable();
            $table->string('a19b')->nullable();
            $table->string('a19c')->nullable();
            $table->string('a20a')->nullable();
            $table->string('a20b')->nullable();
            $table->string('a20c')->nullable();
            $table->string('a20d')->nullable();
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
        Schema::dropIfExists('needs_assessment_inventories');
    }
}
