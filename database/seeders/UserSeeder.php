<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin MenuGO
        User::create([
            'name' => 'Dimas Dwi (Admin)',
            'email' => 'admin@menugo.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Owner UMKM (Contoh: Bapak Joni)
        User::create([
            'name' => 'Bapak Joni (Owner)',
            'email' => 'pakjoni@gmail.com',
            'password' => Hash::make('owner123'),
            'role' => 'umkm',
        ]);
    }
}
