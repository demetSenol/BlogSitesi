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
        Schema::create('uye', function (Blueprint $table) {
            $table->id();
            $table->string('ad',50);
            $table->string('soyad',50);
            $table->string('eposta');
            $table->string('kullaniciAdi',50);
            $table->string('sifre',50);
            $table->timestamps();
        });
        Schema::create('uyeResim', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uyeId')->unsigned();
            $table->string('resim');
            $table->timestamps();
            $table->foreign('uyeId')->references('id')->on('uye')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uye');
        Schema::dropIfExists('uyeResim');
    }
};
