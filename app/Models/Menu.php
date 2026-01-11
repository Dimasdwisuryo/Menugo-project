<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'umkm_id',
        'nama_menu',
        'deskripsi_menu',
        'harga',
        'kategori',
        'is_available',
        'gambar_menu',
    ];

    // Relasi ke UMKM
    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }
}
