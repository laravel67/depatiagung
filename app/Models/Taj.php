<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taj extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function daftars()
    {
        return $this->hasMany(Student::class);
    }
}
