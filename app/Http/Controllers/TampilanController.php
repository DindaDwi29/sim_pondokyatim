<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilanController extends Controller
{
    // {
    //     $anak_asuh= DB::table('anak_asuh')->count();
    //     $pengasuh= DB::table('pengasuh')->count();
    //     $form_donasi= DB::table('form_donasi')->count();
    //     return view('admin.dashboard', compact('anak_asuh','pengasuh','form_donasi'));
    // }

    public function dashboardUser()
    {
        $pinjam = DB::table('pinjams')->count();
        $pengembalian = DB::table('pengembalians')->count();
        return view('pengguna.dashboardUser', compact('pinjam','pengembalian'));
    }

    // public function laporan()
    // {
    //     $pengguna = Pengguna::with('users')->get();
    //     $kegiatan = Kegiatan::all();
    //     $laporan = DB::table('users')->where('role', 'Account User')->get();
    //     return view('layouts.admin.laporan', compact('pengguna','kegiatan','laporan'));
    // }
}
