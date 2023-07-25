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
        Schema::create('yazi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategoriID')->unsigned();
            $table->bigInteger('uyeID')->unsigned();
            $table->string('baslik');
            $table->text('icerik');
            $table->integer('durum')->default(0);
            $table->timestamps();
            $table->foreign('kategoriID')->references('id')->on('kategori')->onDelete('cascade');
            $table->foreign('uyeID')->references('id')->on('uye')->onDelete('cascade');
        });

        Schema::create('yazi_resim', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('yaziID')->unsigned();
            $table->string('resimAdi');
            $table->text('resimUrl');
            $table->timestamps();
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
        Schema::dropIfExists('yazi');
        Schema::dropIfExists('yazi_resim');
    }
};
