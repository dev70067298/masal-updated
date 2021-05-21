<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailerBridesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailer_brides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('retailerId');
            $table->string('wedding');
            $table->string('file');
            $table->string('type');
            $table->integer('status')->comment('1=inactive , 2=active');
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
        Schema::dropIfExists('retailer_brides');
    }
}
