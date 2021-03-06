<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('doc',10);
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('celular',14);
            $table->string('correo',50)->unique();
            $table->tinyInteger('genero'); //1->Hombre 2->Mujer 3->Otro
            $table->string('clave',64);
            $table->date('f_registro');

            $table->primary('doc');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}