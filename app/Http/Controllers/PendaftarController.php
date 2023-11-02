<?php

namespace App\Http\Controllers;

use App\Models\bidang;
use App\Models\pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pendaftaran.index', [
            'pendaftar'=>pendaftar::all(),
            'active'=>'pendaftaran'
        ]);
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


        if ($request->hasFile('foto')) {
            $foto = time().$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('images/foto'), $foto);
            $validate['foto'] = $foto;
        }

        $alasan = $request->input('alasan');

        $pendaftar = new pendaftar();
        $pendaftar->nama = $request->nama;
        $pendaftar->foto = $foto;
        $pendaftar->tanggal_lahir = $request->tanggal_lahir;
        $pendaftar->jenis_kelamin = $request->jenis_kelamin;
        $pendaftar->alamat = $request->alamat;
        $pendaftar->nohp = $request->nohp;
        $pendaftar->email = $request->email;
        $pendaftar->kode_bidang = $request->kode_bidang;
        $pendaftar->alasan = $alasan;

        // dd($pendaftar);
        $pendaftar->save();
        return redirect('/form')->with('pesan', 'Pendaftaran Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('pendaftaran.detail',[
            'pendaftar'=>pendaftar::find($id),
            'bidang'=>bidang::all(),
            'active'=>'pendaftaran'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftar  $pendaftar
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
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftar $pendaftar)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftar $pendaftar)
    {
        //
    }
}
