<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;



class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nome' => 'Admin',
            'sobrenome' => '01',
            'email' => 'admin01@email.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
