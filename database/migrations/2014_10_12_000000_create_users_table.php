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
            $table->id();
            $table->string('groupName')->unique();
            $table->string('password');
            $table->integer('status');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('WA')->unique();
            $table->string('lineId')->unique();
            $table->string('github');
            $table->string('birthPlace');
            $table->date('birthDate');
            $table->string('CV');
            $table->string('IdCard');
            $table->integer('verification')->default('0');
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
