<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GuruKaryawans extends Model
{
    //
    use HasFactory;

    protected $table = 'guru_karyawans';

    protected $fillable = [
        'nama',
        'jabatan',
        'email',
        'no_telfon',
        'foto',
    ];
}
