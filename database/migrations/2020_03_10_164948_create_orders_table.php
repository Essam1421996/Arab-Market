<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->refrences('id')->on('users');
            $table->string('owner_name');
            $table->string('country');
            $table->string('town');
            $table->string('address');
            $table->integer('postcode');
            $table->string('email');
            $table->integer('phone');
            $table->longText('carts_id')->refrences('id')->on('carts');
            $table->float('total_price');
            $table->string('payment_method');
            $table->longText('note');
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
}
