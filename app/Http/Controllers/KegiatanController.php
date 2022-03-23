<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use Illuminate\Http\Request;
use Alert;
use Session;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatan'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'image' => 'required|image|max:2048',
            'isi' => 'required',
            'tgl_kegiatan' => 'required',
            
        ]);

        $kegiatan = new Kegiatan;
        $kegiatan->judul = $request->judul;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/', $name);
            $kegiatan->image  = $name;
        }
        $kegiatan->isi = $request->isi;
        $kegiatan->tgl_kegiatan = $request->tgl_kegiatan;
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);
        Alert::success('Success Menambahkan Kegiatan');
        $kegiatan->save();
        return redirect()->route('kegiatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'judul' => 'required',
            // 'image' => 'required',
            'isi' => 'required',
            'tgl_kegiatan' => 'required',
        ]);

        $kegiatan = kegiatan::findOrFail($id);
        $kegiatan->judul = $request->judul;
        // upload image / foto
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/', $name);
            $kegiatan-> image = $name;
        } else{
            $kegiatan->image = $kegiatan->image;
        }
        $kegiatan->isi = $request->isi;
        $kegiatan->tgl_kegiatan = $request->tgl_kegiatan;
        Alert::success('Success Mengedit kegiatan');
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data edited successfully",
        ]);
        $kegiatan->save();
        return redirect()->route('kegiatan.index');
        //  $validated = $request->validate([
        //     'judul' => 'required',
        //      'image' => 'required',
        //     'isi' => 'required',
        //     'tgl_kegiatan' => 'required',
            
        // ]);

        // $kegiatan = Kegiatan::findOrFail($id);
        // $kegiatan->judul = $request->judul;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) ."".$request->$image->getClientOriginalName();
        //     $image->move('image/', $name);
        //     $kegiatan->image  = $name;
        // }
        // $kegiatan->isi = $request->isi;
        // $kegiatan->tgl_kegiatan = $request->tgl_kegiatan;
        // Session::flash("flash_notification", [
        //     "level" => "success",
        //     "message" => "Data saved successfully",
        // ]);
        // Alert::success('Success Mengubah Kegiatan');
        // $kegiatan->save();
        // return redirect()->route('kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->deleteImage();
        $kegiatan->delete();
        return redirect()->route('kegiatan.index');
    }
}
