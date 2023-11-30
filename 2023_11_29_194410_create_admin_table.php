<?php

// database/migrations/2023_11_29_create_admin_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    public function up()
    {
        Schema::create('Admin', function (Blueprint $table) {
            $table->id('ID_Admin');
            $table->unsignedBigInteger('ID_Utilisateur');
            $table->foreign('ID_Utilisateur')->references('ID_Utilisateur')->on('Utilisateur');
            $table->string('Role');
            $table->string('Autorisations');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Admin');
    }
}
?>