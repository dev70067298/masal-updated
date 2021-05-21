<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('colour', 500);
            $table->string('size', 500);
            $table->string('extra', 500)->nullable();
            $table->integer('category')->nullable();
            $table->integer('silhouette');
            $table->string('tag')->nullable();
            $table->string('keyword');
            $table->double('wholesalePrice');
            $table->double('retailerPrice');
            $table->string('styleNumber', 50);
            $table->string('barcode');
            $table->string('status');
            $table->integer('delete_status')->default(0);
            $table->integer('stock');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->timestamps();
            $table->integer('neckline');
            $table->integer('fabric');
            $table->integer('sleeve');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
