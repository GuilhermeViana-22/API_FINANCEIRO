<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GastoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gastos')->insert([
            [
                'user_id' => 1,
                'descricao' => 'Compra de supermercado',
                'valor' => 250.00,
                'data' => now()->subDays(10),
                'situacao_id' => 1,
                'ano' => now()->startOfYear(),
                'total' => 250.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'descricao' => 'Conta de energia',
                'valor' => 150.00,
                'data' => now()->subDays(5),
                'situacao_id' => 1,
                'ano' => now()->startOfYear(),
                'total' => 150.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'descricao' => 'Combustível',
                'valor' => 300.00,
                'data' => now()->subDays(3),
                'situacao_id' => 2,
                'ano' => now()->startOfYear(),
                'total' => 300.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'descricao' => 'Assinatura de streaming',
                'valor' => 30.00,
                'data' => now()->subMonth(),
                'situacao_id' => 1,
                'ano' => now()->startOfYear(),
                'total' => 30.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'descricao' => 'Manutenção do carro',
                'valor' => 1000.00,
                'data' => now()->subMonths(2),
                'situacao_id' => 3,
                'ano' => now()->startOfYear(),
                'total' => 1000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
