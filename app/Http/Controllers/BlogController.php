<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use tidy;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('blog.index',[
            'blog'=>blog::all(),
            'active'=>'blog'
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
        return view('blog.create',[
            'active'=>'blog'
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
        if ($request->hasFile('foto_kegiatan')) {
            $foto_kegiatan = time().$request->file('foto_kegiatan')->getClientOriginalName();
            $request->file('foto_kegiatan')->move(public_path('images/dokumentasi'), $foto_kegiatan);
            $validate['foto_kegiatan'] = $foto_kegiatan;
        }

        $kegiatan = $request->input('deskripsi_kegiatan');


        $blog = new blog();
        $blog->nama_kegiatan = $request->nama_kegiatan;
        $blog->tanggal_kegiatan = $request->tanggal_kegiatan;
        $blog->foto_kegiatan = $foto_kegiatan;
        $blog->deskripsi_kegiatan = $kegiatan;
        // $blog->deskripsi_kegiatan = strip_tags($request['deskripsi_kegiatan']);

        $blog->save();
        return redirect('/blog')->with('pesan', 'Data Kegiatan Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('blog.detail',[
            'blog'=>blog::find($id),
            'active'=>'blog'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('blog.edit',[
            'blog'=>blog::find($id),
            'active'=>'blog'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->foto_kegiatan != null) {
            $fotoKegiatan = time(). '-' . $request->nama . '.jpg';
            $request->foto_kegiatan->move(public_path('/images/foto kegiatan'), $fotoKegiatan);
            $kontent = $request->input('content');
            blog::find($id)->update([
                'nama_kegiatan'=>$request->nama_kegiatan,
                'tanggal_kegiatan'=>$request->tanggal_kegiatan,
                'foto_kegiatan'=>$fotoKegiatan,
                'deskripsi_kegiatan'=>$kontent
                // 'deskripsi_kegiatan'=>strip_tags($request['deskripsi_kegiatan'])
            ]);
        }
        else {
            blog::find($id)->update([
                'nama_kegiatan'=>$request->nama_kegiatan,
                'tanggal_kegiatan'=>$request->tanggal_kegiatan,
                'deskripsi_kegiatan'=>$request->deskripsi_kegiatan
            ]);
        }

        return redirect('/blog')->with('pesan','Data kegiatan diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        blog::destroy($id);
        return redirect('/blog')->with('pesan','Data kegiatan dihapus.');
    }
}
