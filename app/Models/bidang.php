<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidang extends Model
{
    use HasFactory;
    protected $guarded = [];

    // generate kode bidang
    public static function boot()
    {
        parent::boot();
        static::creating(function ($bidang) {
            $bidang->kode_bidang = 'B-' . str_pad(self::count() + 1, 3, '0', STR_PAD_LEFT);
        });
    }

}
