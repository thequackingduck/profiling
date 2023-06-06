<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeerFacilitatorCircleSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peer_facilitator_circle_settings', function (Blueprint $table) {
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
        Schema::dropIfExists('peer_facilitator_circle_settings');
    }
}
