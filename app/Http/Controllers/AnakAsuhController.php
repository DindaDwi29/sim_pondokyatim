<?php

namespace App\Http\Controllers;

use App\Models\anak_asuh;
use Illuminate\Http\Request;

class AnakAsuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anak_asuh = anak_asuh::all();
        return view('anak asuh.index', compact('anak_asuh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anak asuh.create');
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
            'nama_anak' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'status' => 'required',
        ]);

        $anak_asuh = new anak_asuh;
        $anak_asuh->nama_anak = $request->nama_anak;
        $anak_asuh->jk = $request->jk;
        $anak_asuh->tgl_lahir = $request->tgl_lahir;
        $anak_asuh->status = $request->status;
        $anak_asuh->save();
        return redirect()->route('anak_asuh.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anak_asuh  $anak_asuh
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anak_asuh = anak_asuh::findOrFail($id);
        return view('anak_asuh.show', compact('anak_asuh'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anak_asuh  $anak_asuh
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anak_asuh = anak_asuh::findOrFail($id);
        return view('anak_asuh.edit', compact('anak_asuh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anak_asuh  $anak_asuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $anak_asuh = anak_asuh::findOrFail($id);
        $anak_asuh->nama_anak = $request->nama_anak;
        $anak_asuh->jk = $request->jk;
        $anak_asuh->tgl_lahir = $request->tgl_lahir;
        $anak_asuh->status = $request->status;
        $anak_asuh->save();
        return redirect()->route('anak_asuh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anak_asuh  $anak_asuh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anak_asuh = anak_asuh::findOrFail($id);
        $anak_asuh->delete();
        return redirect()->route('anak_asuh.index');
    }
}
