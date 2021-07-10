<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_cats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 50);
            $table->bigInteger('parent')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('parent')->references('id')->on('product_cats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productCats');
    }
}
