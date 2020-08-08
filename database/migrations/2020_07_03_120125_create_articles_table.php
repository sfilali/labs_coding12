<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('imgurl');
            $table->decimal('jour', 2, 0);
            $table->string('mois');
            $table->decimal('annee', 4, 0);
            $table->string('titre');
            $table->string('auteur');
            $table->string('tags');
            $table->string('commentaires');            
            $table->text('textecourt');
            $table->text('texte');
            $table->string('imgurlauteur');
            $table->string('fonction');
            $table->string('description');
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
        Schema::dropIfExists('articles');
    }
}
