<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->text('pesan');
            $table->integer('nominal');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negos');
    }
}
