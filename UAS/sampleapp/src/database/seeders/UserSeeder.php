<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat data admin jika belum ada
        User::firstOrCreate(
            ['email' => 'admin@evomoto.com'], // Cek berdasarkan email
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]
        );

        // Buat data user biasa jika belum ada
        User::firstOrCreate(
            ['email' => 'user@evomoto.com'],
            [
                'name' => 'User1',
                'password' => bcrypt('password'),
                'role' => 'user',
            ]
        );
    }
}
