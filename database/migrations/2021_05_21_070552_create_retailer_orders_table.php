<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailerOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailer_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('productId');
            $table->integer('RetailerId');
            $table->string('colour');
            $table->string('sizes');
            $table->string('extra', 100)->nullable();
            $table->integer('quantity');
            $table->integer('cancle_order_request')->default(0);
            $table->string('status', 25);
            $table->integer('view')->default(1)->comment('0=Unread , 1=Read');
            $table->text('detail')->nullable();
            $table->string('payment', 20)->nullable();
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
        Schema::dropIfExists('retailer_orders');
    }
}
