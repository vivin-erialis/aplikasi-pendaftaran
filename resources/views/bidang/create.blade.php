@extends('layouts.main')
@section('title','Halaman Tambah Data Bidang')
@section('content')
    <div class="container-fluid py-3 px-3">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0 mb-3">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-2">Tambah Data Bidang</h6>
                            </div>
                        </div>

                    </div>
                    <div class="card-header">
                        <form role="form" action="/bidang" method="post">
                            @csrf
                            <label>Nama Bidang</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="masukan nama bidang"
                                    aria-describedby="name-addon" name="nama_bidang">
                            </div>
                            <label>Deskripsi Tugas</label>
                            <div class="mb-3">
                                <textarea type="email" class="form-control" placeholder="masukan deskripsi tugas"
                                    aria-describedby="email-addon" id="content" name="tugas"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Simpan</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    @endsection
