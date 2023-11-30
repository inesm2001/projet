<?php

// database/migrations/2023_11_29_create_reponse_questionnaire_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReponseQuestionnaireTable extends Migration
{
    public function up()
    {
        Schema::create('Reponse_Questionnaire', function (Blueprint $table) {
            $table->id('ID_Reponse');
            $table->unsignedBigInteger('ID_Questionnaire');
            $table->foreign('ID_Questionnaire')->references('ID_Questionnaire')->on('Questionnaire');
            $table->unsignedBigInteger('ID_Question');
            $table->foreign('ID_Question')->references('ID_Question')->on('Question');
            $table->string('Reponse');
            $table->integer('Score');
            $table->text('Commentaires');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Reponse_Questionnaire');
    }
}

?>
