<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function bidang() {
        return $this->belongsTo(bidang::class, 'kode_bidang');
    }
}
