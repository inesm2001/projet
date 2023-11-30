<?php
// database/migrations/2023_11_29_create_question_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTable extends Migration
{
    public function up()
    {
        Schema::create('Question', function (Blueprint $table) {
            $table->id('ID_Question');
            $table->text('Texte_Question');
            $table->string('Type_Question');
            $table->text('Options_Reponse');
            $table->integer('Points_Attribues');
            $table->integer('Ordre_Affichage');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Question');
    }
}
?>
