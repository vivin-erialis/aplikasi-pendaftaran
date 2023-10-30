@extends('layouts.main')
@section('title','Halaman Detail Data Kegiatan')
@section('content')
    <div class="container-fluid py-3 px-3">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0 mb-3">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                {{-- <h6 class="font-weight-semibold text-lg mb-2">Detail Data blog</h6> --}}
                                <h5>{{ $blog->nama_kegiatan }}</h5>
                                <h6 style="font-size: 18px">{{\Carbon\Carbon::parse($blog->tanggal_kegiatan)->format('d-m-Y') }}</h6>
                            </div>
                        </div>

                    </div>
                    <div class="card-header">
                       <div class="row">
                        <div class="col-md">
                            <img src="/images/dokumentasi/{{ $blog->foto_kegiatan }}" alt="{{ $blog->foto_kegiatan }}"
                            class="me-3 col-10 m-auto">
                        </div>
                        <div class="col-md-8">
                            <h6>Deskripsi Kegiatan :</h6>
                            <p style="color: black">
                                {!! $blog->deskripsi_kegiatan !!}
                            </p>
                        </div>
                       </div>
                        <div class="float-end">
                            <a href="/blog" class="btn btn-dark w-16 mt-4 mb-3 mx-3">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
