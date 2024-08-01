<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bidang extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function strukturs()
    {
        return $this->hasMany(Struktur::class);
    }
}
