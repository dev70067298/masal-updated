<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('businessName');
            $table->string('password');
            $table->integer('credit');
            $table->string('logo')->nullable();
            $table->integer('log')->default(0)->comment('0 = Offline , 1 = Online');
            $table->integer('star')->default(0);
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('post');
            $table->string('registrationNumber');
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('lng', 500)->nullable();
            $table->string('lat', 500)->nullable();
            $table->tinyInteger('userRole')->comment('1=admin, 2=retailer');
            $table->tinyInteger('status')->default(0)->comment('0=pending, 1=approved, 2=reject, 3=deleted');
            $table->integer('orderStatus')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
