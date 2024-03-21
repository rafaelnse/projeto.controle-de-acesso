<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('visitantes', function (Blueprint $table) {
        /*    $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->timestamps(); */

            $table->id();
            $table->string('nome');
            /*$table->string('sobrenome');*/

            $table->string('documento')->unique();
            $table->string('expedidor');

            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            //$table->string('endereco')->nullable();


            //$table->string('slug')/*->unique()*/;
            $table->string('imagem');

            // Relacionar o cadastro com o user que cadastrou
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade');



            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitantes');
    }
};
