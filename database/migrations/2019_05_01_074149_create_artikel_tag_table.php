<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_tags', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('artikel_id')->unsigned();
            $table->foreign('artikel_id')->refrences('id')->on('artikels')->onDelete('cascade');
            
            $table->integer('tags_id')->unsigned();
            $table->foreign('tags_id')->refrences('id')->on('tags')->onDelete('cascade');

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
        Schema::dropIfExists('artikel_tag');
    }
}
