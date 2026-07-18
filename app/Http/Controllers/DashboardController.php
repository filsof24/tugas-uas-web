<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBuku = Buku::count();
        $totalKategori = Kategori::count();
        $bukuTerbaru = Buku::with('kategori')->latest()->take(5)->get();

        return view('dashboard.index', compact('totalBuku', 'totalKategori', 'bukuTerbaru'));
    }
}
