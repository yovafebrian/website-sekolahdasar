<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    public function index()
    {
        // ambil prestasi terbaru untuk highlight
        $prestasiHighlight = Prestasi::latest()->take(3)->get();
        
        // menghitung total prestasi pertingkat 
        $countByTingkat = Prestasi::selectRaw('tingkat, count(*) as total')
            ->groupBy('tingkat')
            ->pluck('total', 'tingkat');
            
        return view('pages.profile', compact('prestasiHighlight', 'countByTingkat'));
    }
    
    public function semua()
    {
        $prestasis = Prestasi::latest()->paginate(10);
        return view('pages.semua-prestasi', compact('prestasis'));
    }
}
