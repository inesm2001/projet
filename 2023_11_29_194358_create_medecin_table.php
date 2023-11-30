<?php

// database/migrations/2023_11_29_create_medecin_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinTable extends Migration
{
    public function up()
    {
        Schema::create('Medecin', function (Blueprint $table) {
            $table->id('ID_Medecin');
            $table->unsignedBigInteger('ID_Utilisateur');
            $table->foreign('ID_Utilisateur')->references('ID_Utilisateur')->on('Utilisateur');
            $table->string('Specialite');
            $table->integer('Sessions_Therapie_Planifiees');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Medecin');
    }
}
?>