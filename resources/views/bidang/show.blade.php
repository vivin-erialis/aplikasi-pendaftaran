@extends('layouts.main')
@section('title','Halaman Detail Data Bidang')
@section('content')
    <div class="container-fluid py-3 px-3">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0 mb-3">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                {{-- <h6 class="font-weight-semibold text-lg mb-2">Detail Data Bidang</h6> --}}
                                <h5>{{ $bidang->nama_bidang }}</h5>
                            </div>
                        </div>

                    </div>
                    <div class="card-header">
                        {{-- <div>
                            <h5>{{ $bidang->nama_bidang }}</h5>
                        </div> --}}
                        <div>
                            <h6>Deskripsi Tugas :</h6>
                            <p style="color: black">
                                {!!$bidang->tugas!!}
                            </p>
                        </div>
                        <div class="">
                            <a href="/bidang" class="btn btn-dark w-16 mt-4 mb-3">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
