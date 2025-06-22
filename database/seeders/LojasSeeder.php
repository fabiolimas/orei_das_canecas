<?php

namespace Database\Seeders;

use App\Models\Loja;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LojasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loja::create([
            'nome'=>'O Rei das Canecas',
            'cnpj'=>'000000000000000',
            'telefone'=>'7436211111',
            'dt_pagamento'=>'01/01/2025',
            'endereco'=>'São Paulo',
            'bairro'=>'centro',
            'cidade'=>'São Paulo',
            'estado'=>'SP',
            'cep'=>'44700-000',
            
            ]);
    }
}
