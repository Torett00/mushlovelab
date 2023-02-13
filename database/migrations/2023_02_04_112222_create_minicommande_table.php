<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minicommande', function (Blueprint $table) {
            $table->id();
            $table->String('quantite');
            $table->String('pict');
            $table->String('productname');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('user_id');
          

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->String('etat')->default('0');

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
        Schema::dropIfExists('minicommande');
    }
};
