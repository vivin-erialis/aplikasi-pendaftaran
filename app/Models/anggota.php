<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function bidang() {
        return $this->belongsTo(bidang::class, 'kode_bidang');
    }
    public static function boot()
    {
        parent::boot();
        static::creating(function ($anggota) {
            $anggota->kode_anggota = 'A-' . str_pad(self::count() + 1, 3, '0', STR_PAD_LEFT);
        });
    }
}
