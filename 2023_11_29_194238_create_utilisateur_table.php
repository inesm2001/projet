<?php
// database/migrations/2023_11_29_create_utilisateur_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    public function up()
    {
        Schema::create('Utilisateur', function (Blueprint $table) {
            $table->id('ID_Utilisateur');
            $table->string('Nom');
            $table->string('Prenom');
            $table->enum('Genre', ['Homme', 'Femme']);
            $table->date('Date_Naissance');
            $table->string('Adresse_Email');
            $table->string('Mot_de_passe');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Utilisateur');
    }
}
?>