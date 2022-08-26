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
        Schema::create('order_cars', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('adress');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->string('salary');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('car_id')->nullable();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_cars');
    }
};
