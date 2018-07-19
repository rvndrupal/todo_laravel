<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('post_id')->unsigned(); // no acepta numeros negativos
            $table->integer('tag_id')->unsigned(); 

            //un post puede tener muchas etiquetas
            //y una etiqueta puede tener muchos post


            $table->timestamps();

            //relaciones de los campos
            $table->foreign('post_id')->references('id')->on('posts')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
