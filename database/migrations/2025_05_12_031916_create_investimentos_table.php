<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->decimal('valor_investido', 15, 2)->default(0.00);
            $table->decimal('rendimento', 15, 2)->default(0.00);
            $table->decimal('percentual_retorno', 5, 2)->default(0.00);
            $table->date('data_investimento');
            $table->date('data_vencimento')->nullable();
            $table->boolean('ativo')->default(true);
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
        Schema::dropIfExists('investimentos');
    }
}
