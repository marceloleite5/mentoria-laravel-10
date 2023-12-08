<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run(): void
    {
        Produto::create(
            [
                'nome' => 'Tênis Nike',
                'valor' => '340.10'
            ]
        );
    }
}
