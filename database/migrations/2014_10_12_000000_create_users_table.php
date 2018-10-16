<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('nameslug');
            $table->string('email')->unique();
            $table->string('coverphoto')->nullable();
            $table->string('avatar')->nullable();
            $table->string('facebook')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('aboutyou')->nullable();
            $table->string('favouritequotes')->nullable();
            $table->string('workplace')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('users');
    }
}
