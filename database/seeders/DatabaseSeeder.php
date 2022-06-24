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
            'nama' => 'Umi Kalsum',
            'email' => 'umi@gmail.com',
            'alamat' => 'Palembang',
            'hp' => '0821937984',
            'pos' => '894281',
            'role' => 1,
            'aktif' => 1,
            'password' => Hash::make('password')
        ]);
    }
}
