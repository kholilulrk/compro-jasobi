<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 20);
            $table->string('password');
            $table->string('nama', 50);
            $table->string('email', 50);
            $table->string('telp', 20);
            $table->string('alamat');
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
        Schema::dropIfExists('userclients');
    }
}
