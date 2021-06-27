<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('Description')->unique();
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')
            ->references('id')->on('categorie')
            ->onDelete('cascade');
            //$table->text('profile_photo_path')->nullable();
            //$table->primary('id'); /* crée une clé primaire */
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
