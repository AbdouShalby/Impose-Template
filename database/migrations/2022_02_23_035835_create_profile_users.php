<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUsers extends Migration
{
    public function up()
    {
        Schema::create('profile_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gender');
            $table->string('city');
            $table->longText('bio');
            $table->longText('facebook');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
            ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile_users');
    }
}
