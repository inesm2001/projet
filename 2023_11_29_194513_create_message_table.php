<?php

// database/migrations/2023_11_29_create_message_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    public function up()
    {
        Schema::create('Message', function (Blueprint $table) {
            $table->id('ID_Message');
            $table->unsignedBigInteger('ID_Expéditeur');
            $table->unsignedBigInteger('ID_Destinataire');
            $table->foreign('ID_Expéditeur')->references('ID_Utilisateur')->on('Utilisateur');
            $table->foreign('ID_Destinataire')->references('ID_Utilisateur')->on('Utilisateur');
            $table->text('Contenu_Message');
            $table->dateTime('Date_Envoi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Message');
    }
}
?>