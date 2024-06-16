<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kejadian extends Model
{
    use HasFactory;

    protected $table = 'kejadians';
    protected $fillable = [
        'nama_pelapor',
        'email_pelapor',
        'jenis_kejadian',
        'waktu_kejadian',
        'tanggal_kejadian',
        'kronologi_kejadian',
        'img_kejadian',
        'status_kejadian'
    ];

    // protected $guarded = [''];
}
