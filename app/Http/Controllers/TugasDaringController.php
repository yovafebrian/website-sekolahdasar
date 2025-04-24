<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasDaring;
use Illuminate\Support\Facades\DB;

class TugasDaringController extends Controller
{
    public function index()
    {
        return view('pages.tugas-daring.index');
    }

    public function kelas($kelas)
    {
        $mapel = TugasDaring::where('grade', $kelas)
            ->select('subject')
            ->distinct()
            ->pluck('subject');

        return view('pages.tugas-daring.kelas', compact('kelas', 'mapel'));
    }

    public function mapel($kelas, $mapel)
    {
        $videos = TugasDaring::where('grade', $kelas)
            ->where('subject', $mapel)
            ->get();

        return view('pages.tugas-daring.mapel', compact('kelas', 'mapel', 'videos'));
    }
}