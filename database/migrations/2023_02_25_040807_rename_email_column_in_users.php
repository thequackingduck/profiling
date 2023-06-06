<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameEmailColumnInUsers extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->renameColumn('email', 'id_no');
    });
}


public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->renameColumn('id_no', 'email');
    });
}

}
