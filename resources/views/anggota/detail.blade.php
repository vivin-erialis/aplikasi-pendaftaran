@extends('layouts.main')
@section('title','Halaman Detail Data Anggota')
@section('content')
    <div class="container-fluid py-3 px-3">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0 mb-3">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-2">Detail Data Anggota</h6>
                                {{-- <h5>{{ $anggota->nama_anggota }}</h5> --}}
                            </div>
                        </div>

                    </div>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4" style="margin-left: 18px;">
                                <img src="/../images/foto/{{ $anggota->foto }}" alt="{{ $anggota->foto }}"
                                 class="me-3 col-10 m-auto">
                            </div>
                            <div class="col-md-7 mx-2">
                                <div class="border-bottom mb-2">
                                    <h6 style="font-size: 20px">{{ $anggota->nama }} ({{$anggota->kode_anggota}})</h6>
                                </div>
                                <div>
                                    <h6 style="font-size: 14px">{{\Carbon\Carbon::parse($anggota->tanggal_lahir)->format('d-m-Y') }}</h6>
                                </div>
                                <div>
                                    <h6 style="font-size: 14px">{{ $anggota->jenis_kelamin }}</h6>
                                </div>
                                <div>
                                    <h6 style="font-size: 14px">{{ $anggota->email }}</h6>
                                </div>
                                <div>
                                    <h6 style="font-size: 14px">{{ $anggota->nohp }}</h6>
                                </div>
                                <div class="border-bottom mb-2">
                                    <h6 style="font-size: 14px">{{ $anggota->alamat }}</h6>
                                </div>
                                <div hidden>
                                    <h6>{{ $anggota->status }}</h6>
                                </div>
                                <div>
                                    <h6 style="font-size: 16px">Tugas sebagai anggota {{ $anggota->bidang->nama_bidang }}</h6>
                                    <p style="color: black; font-size: 14px; text-align:justify;">
                                        {!! $anggota->bidang->tugas !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="" style="margin-right: 60px">
                            {{-- <div class="mx-3">
                                <a href="/anggota" class="btn btn-dark w-16 mt-4 mb-3">Kembali</a>
                            </div> --}}
                           @if ($anggota->status == 'pending')
                            <div class="mx-2 float-end">
                                <form action="/anggota" method="post">
                                    @csrf
                                    <input type="text" name="idanggotaan" id="" value="{{$anggota->id}}" hidden>
                                    <input type="text" name="status" id="" value="Diterima" hidden>
                                    <button type="submit" class="btn btn-success w-16 mt-4 mb-3">Terima</button>
                                </form>
                            </div>
                            <div class="mx-2 float-end">
                                <form action="/anggota" method="post">
                                    @csrf
                                    <input type="text" name="idanggotaan" id="" value="{{$anggota->id}}" hidden>
                                    <input type="text" name="status" id="" value="Ditolak" hidden>
                                    <button type="submit" class="btn btn-danger w-16 mt-4 mb-3">Tolak</button>
                                </form>
                            </div>


                           @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
