<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduk = Produk::count();
        $totalKategori = Kategori::count();
        $totalTransaksi = Transaksi::count();
        $totalHariIni = Transaksi::whereDate('tanggal', Carbon::today())->sum('total');

        return view('dashboard', compact('totalProduk', 'totalKategori', 'totalTransaksi', 'totalHariIni'));
    }
}
