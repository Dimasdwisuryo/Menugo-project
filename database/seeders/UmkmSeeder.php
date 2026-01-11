<?php

namespace Database\Seeders;

use App\Models\Umkm;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = User::where('email', 'pakjoni@gmail.com')->first();

        Umkm::create([
            'user_id' => $owner->id,
            'nama_umkm' => 'Bakso Goyang Lidah Pak JONI',
            'deskripsi' => 'Warung bakso di area Ketintang.',
            'no_telp' => '081332186046',
            'alamat' => 'Jl. Ketintang No.208, Ketintang, Kec. Gayungan, Surabaya, Jawa Timur 60231',
            'jam_buka' => '10:00',
            'jam_tutup' => '19:30',
            'status_verifikasi' => 'approved',
            'is_active' => true,
        ]);
    }
}
