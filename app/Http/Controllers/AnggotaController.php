<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use PDF;
use App\Models\bidang;
use App\Models\pendaftar;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $kodeBbidang = $request->kode_bidang;
        // if ()

        return view('anggota.index',[
            'anggota'=>anggota::with('bidang')->get(),
            'active'=>'anggota'

        ]);
    }

    public function cetakData() {
        $anggota = anggota::with('bidang')->get();

        $pdf = PDF::loadView('anggota.laporan', compact('anggota'));
        return $pdf->stream('Laporan Anggota.pdf');
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
        //
        $pendaftar = pendaftar::find($request->idPendaftaran);
        // dd($pendaftar);
        if($request->status == 'Diterima'){
            anggota::create([
                'nama'=>$pendaftar->nama,
                'foto'=>$pendaftar->foto,
                'tanggal_lahir'=>$pendaftar->tanggal_lahir,
                'jenis_kelamin' =>$pendaftar->jenis_kelamin,
                'alamat'=>$pendaftar->alamat,
                'nohp'=>$pendaftar->nohp,
                'email'=>$pendaftar->email,
                'kode_bidang'=>$pendaftar->kode_bidang
            ]);

            pendaftar::find($pendaftar->id)->update([
                'status'=>'Diterima'
            ]);
        } else {
            pendaftar::find($pendaftar->id)->update([
                'status'=>'Ditolak'
            ]);
        }
        return redirect('/pendaftaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('anggota.detail',[
            'anggota'=>anggota::find($id),
            'bidang'=>bidang::find($id),
            'pendaftar'=>pendaftar::find($id),
            'active'=>'anggota'

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('anggota.edit', [
            'anggota'=>anggota::find($id),
            'bidang'=>bidang::find($id),
            'pendaftar'=>pendaftar::find($id),
            'bidangs'=>bidang::first(),
            'active'=>'anggota'
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->foto != null) {
            $foto = time() . '-' . $request->nama . '.jpg';
            $request->foto->move(public_path('images/foto'), $foto);
            anggota::find($id)->update([
                'nama'=>$request->nama,
                'foto'=>$foto,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'alamat'=>$request->alamat,
                'nohp'=>$request->nohp,
                'email'=>$request->email,
                'kode_bidang'=>$request->kode_bidang
            ]);
        }
        else{
            anggota::find($id)->update([
                'nama'=>$request->nama,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'alamat'=>$request->alamat,
                'nohp'=>$request->nohp,
                'email'=>$request->email,
                'kode_bidang'=>$request->kode_bidang
            ]);
        }

        return redirect('/anggota')->with('pesan','Data anggota berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggota $anggota)
    {
        //
    }
}
