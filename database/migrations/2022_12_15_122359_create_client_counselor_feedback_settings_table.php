<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientCounselorFeedbackSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_counselor_feedback_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('enabled')->default(1);
            $table->integer('req_fields')->default(1);
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
        Schema::dropIfExists('client_counselor_feedback_settings');
    }
}
