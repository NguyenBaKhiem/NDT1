<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Documents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('idUser')->unsigned();
         $table->foreign('idUser')->references('id')->on('users');
         $table->integer('idSubject')->unsigned();
         $table->foreign('idSubject')->references('id')->on('subjects');
         $table->string('title');
         $table->text('content');
         $table->string('attachments');
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
        Schema::dropIfExists('documents');
    }
}
