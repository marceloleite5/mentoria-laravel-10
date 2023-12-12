<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'Elba Mônica',
                'email' => 'elbamonicacoutinho@gmail.com',
                'endereco' => 'São Judas Tadeu nº 75',
                'logradouro' => 'Rua',
                'cep' => '44.700-000',
                'bairro' => 'Leader'
            ]
        );
        Cliente::create(
            [
                'nome' => 'Maria Elena Leite',
                'email' => 'melleite@gmail.com',
                'endereco' => 'São Judas Tadeu nº 75',
                'logradouro' => 'Rua',
                'cep' => '44.700-000',
                'bairro' => 'Leader'
            ]
        );
    }
}
