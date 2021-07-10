<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->string('icon')->nullable();
            $table->string('logo')->nullable();
            $table->string('img_team')->nullable();
            $table->string('logo_grayscale')->nullable();
            $table->string('logo_feature')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
