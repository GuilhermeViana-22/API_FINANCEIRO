<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bancos')->insert([
            [
                'nome' => 'Nubank',
                'codigo' => '290',
                'agencia' => '0001',
                'conta' => '12345678',
                'saldo' => 0.00,
                'tipo_conta' => 'digital',
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Bradesco',
                'codigo' => '237',
                'agencia' => '1234',
                'conta' => '87654321',
                'saldo' => 0.00,
                'tipo_conta' => 'corrente',
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'PicPay',
                'codigo' => '380',
                'agencia' => '0001',
                'conta' => '12344321',
                'saldo' => 0.00,
                'tipo_conta' => 'digital',
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Mercado Pago',
                'codigo' => '323',
                'agencia' => '0001',
                'conta' => '11223344',
                'saldo' => 0.00,
                'tipo_conta' => 'digital',
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
