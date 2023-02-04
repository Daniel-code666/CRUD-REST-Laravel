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
        Schema::create('subarticle', function (Blueprint $table) {
            $table->id('subart_id');
            $table->string('subart_desc');
            $table->unsignedBigInteger('subart_art_id');
            $table->foreign('subart_art_id')->references('art_id')->on('article');
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
        Schema::dropIfExists('subarticles');
    }
};
