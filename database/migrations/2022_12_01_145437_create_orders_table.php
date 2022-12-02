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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('town')->nullable();
            $table->string('adress')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('product_title')->nullable();
            $table->string('quantity')->nullable();
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
