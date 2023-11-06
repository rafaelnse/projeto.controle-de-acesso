<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nome' => 'Visitante', 'Funcionário',
            'descricao' => 'Cidadão que veio resolver algum assunto na empresa', 'Funcionário que é empregado na empresa',
        ]);
    }
}