<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanciamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financiamentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 50); // Ex: carro, casa, terreno, equipamento
            $table->string('descricao', 255);
            $table->decimal('valor_total', 15, 2);
            $table->decimal('valor_entrada', 15, 2)->default(0.00);
            $table->integer('parcelas');
            $table->decimal('valor_parcela', 15, 2);
            $table->decimal('taxa_juros', 5, 2);
            $table->date('data_contratacao');
            $table->date('data_vencimento')->nullable();
            $table->string('status', 20)->default('ativo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financiamentos');
    }
}
