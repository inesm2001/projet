<?php
// database/migrations/2023_11_29_create_alerte_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlerteTable extends Migration
{
    public function up()
    {
        Schema::create('Alerte', function (Blueprint $table) {
            $table->id('ID_Alerte');
            $table->unsignedBigInteger('ID_Patient');
            $table->foreign('ID_Patient')->references('ID_Patient')->on('Patient');
            $table->date('Date_Alerte');
            $table->string('Type_Alerte');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Alerte');
    }
}
?>