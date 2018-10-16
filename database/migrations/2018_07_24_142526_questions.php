<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
       Schema::create('questions', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('idUser')->unsigned();
         $table->foreign('idUser')->references('id')->on('users');
         $table->text('content');
         $table->string('attachments')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
