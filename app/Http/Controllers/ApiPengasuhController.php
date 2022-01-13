<?php

namespace App\Http\Controllers;
use App\Models\Pengasuh;
use Illuminate\Http\Request;

class ApiPengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengasuh = Pengasuh::all();

         if ($pengasuh->count() >= 1){
            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'berhasil',
                'data' =>$pengasuh,
            ]);
        }else{
        return response()->json([
            'status' => false,
            'code' => 404,
            'message' => 'gagal',
            'data' =>$pengasuh,
        ]);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengasuh = new Pengasuh();
        $pengasuh->nama_pengasuh = $request->nama_pengasuh;
        $pengasuh->jk = $request->jk;
        $pengasuh->tgl_lahir = $request->tgl_lahir;
        $pengasuh->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Pengasuh Berhasil Dibuat',
            'data' => $pengasuh,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengasuh = Pengasuh::findOrFail($id);
        if ($pengasuh){
            return response()->json([
                'status' => true,
                'message' => 'Show Data Pengasuh',
                'data' =>$pengasuh,
            ]);
        }else{
        return response()->json([
            'status' => false,
            'message' => 'Data Pengasuh Tidak Ditemukan',
            'data' =>[],
        ], 404);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengasuh = Pengasuh::find($id);
        if ($pengasuh){
            $pengasuh->nama_pengasuh = $request->nama_pengasuh;
            $pengasuh->jk = $request->jk;
            $pengasuh->tgl_lahir = $request->tgl_lahir;
            $pengasuh->save();
            return response()->json([
                'success' => true,
                'message' => 'Data Pengasuh Berhasil Diupdate',
                'data' => $user,
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data Pengasuh Tidak Ditemukan',
                'data' =>[],
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengasuh = pengasuh::find($id);
        if ($pengasuh){
            $pengasuh->delete();
            return response()->json([
                'success' => true,
                'message' => 'Data Pengasuh Berhasil Dihapus',
                'data' => $pengasuh,
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data Pengasuh Tidak Ditemukan',
                'data' =>[],
            ], 404);
        }
    }
}
