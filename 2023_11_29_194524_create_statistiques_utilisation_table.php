<?php

// database/migrations/2023_11_29_create_statistiques_utilisation_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatistiquesUtilisationTable extends Migration
{
    public function up()
    {
        Schema::create('Statistiques_Utilisation', function (Blueprint $table) {
            $table->id('ID_Statistique');
            $table->unsignedBigInteger('ID_Utilisateur');
            $table->foreign('ID_Utilisateur')->references('ID_Utilisateur')->on('Utilisateur');
            $table->date('Date_Statistique');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Statistiques_Utilisation');
    }
}
?>