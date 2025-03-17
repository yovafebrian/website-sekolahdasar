<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::latest()->get();
        return view('pages.kegiatan', compact('kegiatans'));
    }


}
