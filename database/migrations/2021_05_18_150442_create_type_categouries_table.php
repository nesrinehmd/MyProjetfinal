<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeCategouriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_categorie', function (Blueprint $table) {
            $table->id();
            $table-> string('marque')->nullable();
            $table-> string('wilaya')->nullable();
            $table-> string('superficie')->nullable();
            $table-> string('echange')->nullable();
            $table-> string('pièces')->nullable();
            $table->unsignedBigInteger('cat_id');
            $table->timestamps();
            $table->foreign('cat_id')
            ->references('id')->on('categorie')
            ->onDelete('cascade');
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
        Schema::dropIfExists('type_categorie');
    }
}
