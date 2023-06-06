<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('schoolyear_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('yearlevel')->nullable();
            $table->string('section')->nullable();
            $table->longText('a1a')->nullable();
            $table->longText('a1b')->nullable();
            $table->longText('a1c')->nullable();
            $table->longText('a1d')->nullable();
            $table->longText('a1e')->nullable();
            $table->longText('a1f')->nullable();
            $table->longText('a1g')->nullable();
            $table->longText('a1h')->nullable();
            $table->longText('a1i')->nullable();
            $table->longText('a1j')->nullable();
            $table->longText('a1k')->nullable();
            $table->longText('a1l')->nullable();
            $table->longText('a1m')->nullable();
            $table->longText('a2a')->nullable();
            $table->longText('a2b')->nullable();
            $table->longText('a2c')->nullable();
            $table->longText('a2d')->nullable();
            $table->longText('a2e')->nullable();
            $table->longText('a2f')->nullable();
            $table->longText('a2g')->nullable();
            $table->longText('a3a')->nullable();
            $table->longText('a3b')->nullable();
            $table->longText('a3c')->nullable();
            $table->longText('a3d')->nullable();
            $table->longText('a3e')->nullable();
            $table->longText('a3f')->nullable();
            $table->longText('a3g')->nullable();
            $table->longText('a4a')->nullable();
            $table->longText('a4b')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
