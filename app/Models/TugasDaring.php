<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TugasDaring extends Model
{
    //
    protected $fillable = [
        'grade',
        'subject',
        'title',
        'youtube_link',
    ];
}