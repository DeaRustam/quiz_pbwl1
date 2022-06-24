<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Dea',
            'email' => 'dea@gmail.com',
            'alamat' => 'Jl. Durung',
            'hp' => '08776428732',
            'pos' => '894583',
            'role' => 1,
            'aktif' => 1,
            'password' => Hash::make('password')
        ]);
    }
}
