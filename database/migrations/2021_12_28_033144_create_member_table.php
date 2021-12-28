<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('WA')->unique();
            $table->string('lineId')->unique();
            $table->string('github');
            $table->string('birthPlace');
            $table->date('birthDate');
            $table->string('CV');
            $table->string('IdCard');
            $table->unsignedBigInteger('groupId');//->default('id');
            $table->foreign('groupId')->references('id')->on('users') //foreign nama foreign key di id di table genres (ada di migration)
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });

        return redirect(route('registerMemberPage'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
