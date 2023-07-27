<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yorum', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userID')-> unsigned();
            $table->bigInteger('yaziID')-> unsigned();
            $table->text('yorum');
            $table->integer('status')->default(0);
            $table->date('tarih');
            $table->timestamps();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('yaziID')->references('id')->on('yazi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yorum');
    }
};
