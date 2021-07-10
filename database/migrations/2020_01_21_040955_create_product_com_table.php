<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductComTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_coms', function (Blueprint $table) {
            $table->bigInteger('compro_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('compro_id')->references('id')->on('compros')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_coms');
    }
}
