<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
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
            // $table->unsignedBigInteger('genreId');
            // $table->foreign('genreId')->references('id')->on('genres'); //foreign nama foreign key di id di table genres (ada di migration)
            $table->timestamps();
        });

        return redirect(route('registerLeaderPage'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaders');
    }
}
