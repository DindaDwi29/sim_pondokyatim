<?php

namespace App\Http\Controllers;
use App\Models\kegiatan;
use App\Models\anak_asuh;
use App\Models\pengasuh;
use App\Models\form_donasi;
use DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function kegiatann()
    {
        $kegiatan = Kegiatan::all();
        return view('pronen.kegiatan', compact('kegiatan'));
    }
    public function data(){
        $anak_asuh = anak_asuh::all()->count();
        $pengasuh = pengasuh::all()->count();
        $form_donasi = form_donasi::all()->count();
        $total_donasi = DB::table('form_donasis')->sum('form_donasis.nominal');
        $kegiatan = Kegiatan::all();
        return view('pronen.index', compact('anak_asuh','pengasuh','form_donasi','total_donasi','kegiatan'));
    }

    public function data2(){
        $anak_asuh = anak_asuh::all()->count();
        $pengasuh = pengasuh::all()->count();
        $form_donasi = form_donasi::all()->count();
        $total_donasi = DB::table('form_donasis')->sum('form_donasis.nominal');
        $kegiatan = Kegiatan::all();
        return view('index', compact('anak_asuh','pengasuh','form_donasi','total_donasi','kegiatan'));
    }
    public function tambah(Request $request)
    {
        $validated = $request->validate([
         
            'nama_donatur' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'nominal' => 'required',
            'tgl_transfer' => 'required',
            'nama_bank' => 'required',
            'no_rek' => 'required',
            'transfer_ke_bank' => 'required',
            
        ]);

        $form_donasi = new Form_donasi;
        $form_donasi->nama_donatur = $request->nama_donatur;
        $form_donasi->email = $request->email;
        $form_donasi->no_telp = $request->no_telp;
        $form_donasi->nominal = $request->nominal;
        $form_donasi->tgl_transfer = $request->tgl_transfer;
        $form_donasi->nama_bank = $request->nama_bank;
        $form_donasi->no_rek = $request->no_rek;
        $form_donasi->transfer_ke_bank = $request->transfer_ke_bank;
        $form_donasi->save();
        return redirect()->route('pronen.donasi');
    }
   
}
