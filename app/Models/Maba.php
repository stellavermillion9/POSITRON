<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maba extends Model
{
    use HasFactory;

    protected $table = 'maba';

    protected $fillable = [
        'nama', 'programstudi', 'offering', 'nim', 'kelompok', 'peran'
    ];
}
