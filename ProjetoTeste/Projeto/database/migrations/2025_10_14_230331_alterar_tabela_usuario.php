<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //metodo que executa toda vez q usa php artisan migrate
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('nivel', ['ADM', 'CLI'])->default('CLI');//default insere por padrão cli se n for adm ou cli
            //quero criar uma tabela nova no banco de nivel adm ou cli
        });//classe responsavel pelo banco de dados
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//metodo que executa toda vez q usa php artisan migrate::rollback ele refaz tudo isso
    {
       // 
    }
};
