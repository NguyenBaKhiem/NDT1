<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nameslug');
            $table->string('email')->unique();
            $table->string('coverphoto')->nullable();
            $table->string('avatar')->nullable();
            $table->string('facebook')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('alias')->nullable();
            $table->string('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('aboutyou')->nullable();
            $table->string('favouitequotes')->nullable();
            $table->string('workplace')->nullable();
            $table->string('address')->nullable();
            $table->integer('dominion');
            $table->string('password');
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
        Schema::dropIfExists('admins');
    }
}
