<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    /// Menentukan kolom mana saja yang boleh diisi
    protected $fillable = [
        'user_id',
        'nama_umkm',
        'deskripsi',
        'no_telp',
        'alamat',
        'jam_buka',
        'jam_tutup',
        'logo_toko',
        'status_verifikasi',
        'is_active',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Menu
    public function menus()
    {
        return $this->hasMany(Menu::class, 'umkm_id');
    }
}
