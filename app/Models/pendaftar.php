<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftar extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bidang() {
        return $this->belongsTo(bidang::class, 'kode_bidang');
    }
    public static function boot()
    {
        parent::boot();
        static::creating(function ($pendaftar) {
            $pendaftar->kode_pendaftaran = 'NPA-' . str_pad(self::count() + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}


