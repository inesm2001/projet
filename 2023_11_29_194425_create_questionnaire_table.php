<?php
// database/migrations/2023_11_29_create_questionnaire_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnaireTable extends Migration
{
    public function up()
    {
        Schema::create('Questionnaire', function (Blueprint $table) {
            $table->id('ID_Questionnaire');
            $table->unsignedBigInteger('ID_Patient');
            $table->foreign('ID_Patient')->references('ID_Patient')->on('Patient');
            $table->date('Date_Questionnaire');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Questionnaire');
    }
}

?>