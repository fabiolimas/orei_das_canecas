<?php

namespace Database\Seeders;

use App\Models\Loja;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         Loja::create([
            'nome'=>'O Rei das Canecas',
            'cnpj'=>'000000000000000',
            'telefone'=>'7436211111',
            'dt_pagamento'=>'2025-06-23',
            'endereco'=>'São Paulo',
            'bairro'=>'centro',
            'cidade'=>'São Paulo',
            'estado'=>'SP',
            'cep'=>'44700-000',
            
            ]);


    }
}
