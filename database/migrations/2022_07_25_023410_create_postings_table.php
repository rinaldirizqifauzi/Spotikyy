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
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('id_band');
            $table->unsignedBigInteger('id_genre');
            $table->unsignedBigInteger('id_type');
            $table->string('video');
            $table->string('deskripsi');
            $table->timestamps();

            $table->foreign('id_band')->references('id')->on('bands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_type')->references('id')->on('types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postings');
    }
};
