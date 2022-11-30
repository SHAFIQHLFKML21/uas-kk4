<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $fillable =[
        'username', 'email', 'telepon', 'jumlah_pesan', 'total_harga'
    ];
}
