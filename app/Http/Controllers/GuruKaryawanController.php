<?php

namespace App\Http\Controllers;
use App\Models\GuruKaryawans;

use Illuminate\Http\Request;

class GuruKaryawanController extends Controller
{
    //
    public function index()
    {
        $guruKaryawans = GuruKaryawans::all();
        return view('pages.guru-karyawan', compact('guruKaryawans'));
    }
}
