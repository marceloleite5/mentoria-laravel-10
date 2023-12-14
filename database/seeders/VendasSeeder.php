<?php

namespace Database\Seeders;

use App\Models\Venda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Venda::create(
            [
                'numero_da_venda' => 1454,
                'produto_id' => 4,
                'cliente_id' => 3,
            ]
        );
        Venda::create(
            [
                'numero_da_venda' => 1153,
                'produto_id' => 5,
                'cliente_id' => 1,
            ]
        );

        Venda::create(
            [
                'numero_da_venda' => 1003,
                'produto_id' => 6,
                'cliente_id' => 4,
            ]
        );
        Venda::create(
            [
                'numero_da_venda' => 2003,
                'produto_id' => 7,
                'cliente_id' => 4,
            ]
        );
    }
}
