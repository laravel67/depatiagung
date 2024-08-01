<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'bidang_id', 'image'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }


    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }
}
