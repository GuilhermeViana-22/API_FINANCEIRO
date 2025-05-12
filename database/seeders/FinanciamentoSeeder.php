<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanciamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('financiamentos')->insert([
            [
                'tipo' => 'carro',
                'descricao' => 'Financiamento de veículo - Honda Civic',
                'valor_total' => 80000.00,
                'valor_entrada' => 20000.00,
                'parcelas' => 60,
                'valor_parcela' => 1000.00,
                'taxa_juros' => 1.5,
                'data_contratacao' => now()->subYears(2),
                'data_vencimento' => now()->addYears(3),
                'status' => 'ativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipo' => 'casa',
                'descricao' => 'Financiamento de imóvel - Apartamento 3 quartos',
                'valor_total' => 350000.00,
                'valor_entrada' => 50000.00,
                'parcelas' => 360,
                'valor_parcela' => 1000.00,
                'taxa_juros' => 0.8,
                'data_contratacao' => now()->subYears(5),
                'data_vencimento' => now()->addYears(25),
                'status' => 'ativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipo' => 'terreno',
                'descricao' => 'Financiamento de terreno em área urbana',
                'valor_total' => 100000.00,
                'valor_entrada' => 20000.00,
                'parcelas' => 120,
                'valor_parcela' => 667.00,
                'taxa_juros' => 1.2,
                'data_contratacao' => now()->subYears(3),
                'data_vencimento' => now()->addYears(7),
                'status' => 'ativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipo' => 'equipamento',
                'descricao' => 'Financiamento de equipamentos para escritório',
                'valor_total' => 50000.00,
                'valor_entrada' => 10000.00,
                'parcelas' => 24,
                'valor_parcela' => 1666.67,
                'taxa_juros' => 1.0,
                'data_contratacao' => now()->subYear(),
                'data_vencimento' => now()->addYear(),
                'status' => 'ativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
