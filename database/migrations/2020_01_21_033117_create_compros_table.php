<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('nama', 100);
            $table->string('alamat', 200);
            $table->string('kota', 50);
            $table->string('kodepos', 5);
            $table->string('telp', 20);
            $table->string('email', 50)->unique();
            $table->float('lat');
            $table->float('long');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('user_clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compros');
    }
}
