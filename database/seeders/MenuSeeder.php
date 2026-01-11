<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Umkm;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $umkm = Umkm::where('nama_umkm', 'Bakso Goyang Lidah Pak JONI')->first();

        // Menu 1
        Menu::create([
            'umkm_id' => $umkm->id,
            'nama_menu' => 'Pentol Besar Halus & Kasar',
            'deskripsi_menu' => 'Olahan pentol dengan ukuran lebih besar, spesial menggunakan 100% daging sapi pilihan',
            'harga' => 15000,
            'kategori' => 'makanan',
            'is_available' => true,
        ]);

        // Menu 2
        Menu::create([
            'umkm_id' => $umkm->id,
            'nama_menu' => 'Es Teh Manis',
            'deskripsi_menu' => 'Teh olahan dengan rasa yang enak, menggunakan 100% gula asli',
            'harga' => 3000,
            'kategori' => 'minuman',
            'is_available' => true,
        ]);
    }
}
