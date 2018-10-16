<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SupportsFaqs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('idUser')->unsigned();
           $table->foreign('idUser')->references('id')->on('users');
           $table->string('title');
           $table->text('content');
           $table->text('answer')->nullable();
           $table->string('attachments')->nullable();
           $table->integer('faq')->default(0);
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
        Schema::dropIfExists('supports');
    }
}
