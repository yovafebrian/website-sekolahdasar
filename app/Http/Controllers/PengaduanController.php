<?php

namespace App\Http\Controllers;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('pages.pengaduan');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email',
            'isi_pengaduan' => 'required|string',
        ]);

        Pengaduan::create($request->all());

        return redirect()->back()->with('success', 'Pengaduan Anda telah dikirim.');
    }
}
