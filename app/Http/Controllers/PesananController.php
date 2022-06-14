<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = $pesanan = DB::table('pesanan')->get(); // Mengambil semua isi tabel
        $post = Pesanan::orderBy('kode', 'asc')->paginate(2);
        return view('dashboard.pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'plat' => 'required',
            'paket' => 'required',
            'telepon' => 'required',
            'status' => 'required', 
        ]);

        Pesanan::create($request->all());
        return redirect()->route('pesanan.index')
        ->with('success', 'Pesanan Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode)
    {
        $pesanan = Pesanan::find($kode);
        return view('dashboard.pesanan.detail', compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $pesanan = DB::table('pesanan')->where('kode', $kode)->first();
        return view('dashboard.pesanan.edit', compact('pesanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'plat' => 'required',
            'paket' => 'required',
            'telepon' => 'required',
            'status' => 'required', 
        ]);

        Pesanan::find($kode)->update($request->all());

        return redirect()->route('pesanan.index')
        ->with('success', 'Pesanan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        Pesanan::find($kode)->delete();
        return redirect()->route('pesanan.index')
        -> with('success', 'Pesanan Berhasil Dihapus');
    }
}
