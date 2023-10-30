@extends('layouts.main')
@section('title','Halaman Edit Data Anggota')
@section('content')
    <div class="container-fluid py-3 px-3">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0 mb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-2">Edit Data Anggota</h6>
                            </div>
                        </div>

                    </div>
                    <div class="card-header">
                        <form role="form" action="/anggota/{{ $anggota->id }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class=" col-md-12 d-flex flex-column mx-auto">
                                    <div class="card card-plain mt-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nama</label>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="masukan nama" aria-label="Name"
                                                            aria-describedby="name-addon" name="nama"
                                                            value="{{ $anggota->nama }}">
                                                    </div>
                                                    <label>Foto</label>
                                                    <div class="mb-3">
                                                        <input type="file" class="form-control"
                                                            placeholder="Enter your email address" aria-label="Email"
                                                            aria-describedby="email-addon" name="foto">
                                                    </div>
                                                    <label>Tanggal Lahir</label>
                                                    <div class="mb-3">
                                                        <input type="date" class="form-control" placeholder=""
                                                            aria-label="Password" aria-describedby="password-addon"
                                                            name="tanggal_lahir" value="{{ $anggota->tanggal_lahir }}">
                                                    </div>
                                                    <label>Alamat</label>
                                                    <div class="mb-3">
                                                        <textarea type="text" class="form-control" placeholder="masukan alamat" aria-label="Name"
                                                            aria-describedby="name-addon" name="alamat">{{ $anggota->alamat }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>No Handphone</label>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="masukan nomor handphone" aria-label="Name"
                                                            aria-describedby="name-addon" name="nohp"
                                                            value="{{ $anggota->nohp }}">
                                                    </div>
                                                    <label>Email</label>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="masukan email" aria-label="Name"
                                                            aria-describedby="name-addon" name="email"
                                                            value="{{ $anggota->email }}">
                                                    </div>
                                                    <label>Bidang</label>
                                                    <div class="mb-3">
                                                        <select class="form-control form-select"
                                                            aria-label="Default select example" name="kode_bidang"
                                                            required>
                                                            <option>--- Pilih Bidang ---</option>
                                                            @php
                                                                $bidang = App\Models\Bidang::get();
                                                            @endphp
                                                            @foreach ($bidang as $data)
                                                                <option value="{{ $data->id }}"
                                                                    {{ $data->id == $bidangs->id ? 'selected' : '' }}>
                                                                    {{ $data->nama_bidang }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                            class="btn btn-dark w-100 mt-4 mb-3">Simpan</button>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>


                </div>
            </div>
        </div>
    @endsection
