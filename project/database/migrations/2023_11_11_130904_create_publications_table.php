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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('type_publications_id');
            $table->foreign('type_publications_id')->references('id')->on('type_publications')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_publication');
            $table->string('titre')->nullable();
            $table->string('annee')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('maison_edition')->nullable();
            $table->string('auteur_livre')->nullable();
            $table->string('page')->nullable();
            $table->string('nom_journal')->nullable();
            $table->string('nom_pub_conf')->nullable();
            $table->string('jour')->nullable();
            $table->string('mois')->nullable();
            $table->longText('contenu')->nullable();
            $table->string('fichier')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('publications');
    }
};
