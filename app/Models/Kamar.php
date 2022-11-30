<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable =[
        'no_kamar', 'harga', 'deskripsi', 'fasilitas',
    ];
}
