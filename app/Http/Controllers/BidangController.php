<?php

namespace App\Http\Controllers;

use App\Models\bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('bidang.index', [
            'bidang'=>bidang::all(),
            'active'=>'bidang'
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
        return view('bidang.create',[
            'active'=>'bidang'
        ]);
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
        bidang::create([
            'nama_bidang' => $request->nama_bidang,
            'tugas' => $request->tugas
        ]);
        return redirect('/bidang')->with('pesan','Data bidang ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('bidang.show',[
            'bidang'=>bidang::find($id),
            'active'=>'bidang'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('bidang.edit', [
            'bidang'=>bidang::find($id),
            'active'=>'bidang'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        bidang::find($id)->update([
            'nama_bidang'=>$request->nama_bidang,
            'tugas'=>$request->tugas
        ]);

        return redirect('/bidang')->with('pesan','Data bidang diedit.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy(bidang $bidang)
    {
        //
        bidang::destroy($bidang->id);
        return redirect('/bidang')->with('pesan','Data bidang dihapus.');
    }
}
