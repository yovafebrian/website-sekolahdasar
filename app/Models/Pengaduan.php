<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    //
    protected $fillable = [
        'nama',
        'email',
        'isi_pengaduan',
        
    ];
    
}
