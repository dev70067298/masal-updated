<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_models', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message')->nullable();
            $table->string('file', 500)->nullable();
            $table->string('sender');
            $table->integer('senderId');
            $table->integer('receiver');
            $table->integer('marker')->comment('0=read, 1=unread');
            $table->timestamps();
            $table->integer('status')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_models');
    }
}
