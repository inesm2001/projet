<?php
// database/migrations/2023_11_29_create_patient_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    public function up()
    {
        Schema::create('Patient', function (Blueprint $table) {
            $table->id('ID_Patient');
            $table->unsignedBigInteger('ID_Utilisateur');
            $table->foreign('ID_Utilisateur')->references('ID_Utilisateur')->on('Utilisateur');
            $table->integer('Niveau_Addiction');
            $table->integer('Moyenne_Heures_Jeu_Semaine');
            $table->integer('Moyenne_Mois_Jeu');
            $table->integer('Score_Insomnie');
            $table->integer('Score_Somnolence_Excessive');
            $table->integer('Score_Anxiete');
            $table->integer('Score_Depression');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Patient');
    }
}
?>