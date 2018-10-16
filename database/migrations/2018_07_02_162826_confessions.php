<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Confessions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender')->nullable();
            $table->string('reciever')->nullable();
            $table->text('header')->nullable();
            $table->text('content');
            $table->text('footer')->nullable();
            $table->string('images')->nullable();
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
        Schema::dropIfExists('confessions');
    }
}
