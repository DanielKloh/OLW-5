<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "role_id" => 1,
            "name" => "Admin User",
            "email" => "admin@teste.com.br",
            'password' => hash::make('password'), // Inclua o campo password aqui
        ]);

        User::create([
            "role_id" => 2,
            "name" => "Normal User",
            "email" => "normal@teste.com.br",
            'password' => hash::make('password'), // Inclua o campo password aqui
        ]);

        
    }
}
