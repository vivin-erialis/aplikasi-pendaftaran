@extends('dashboard.dashboard')
@section('title','Halaman Pengumuman Hasil Seleksi')
@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col mt-1">
                @if (session()->has('pesan'))
                    <div class="alert d-flex align-items-center" style="background-color: rgb(66, 66, 111); color: white;"
                        role="alert">
                        {{ session('pesan') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row text-center mt-2 mb-3">
            <h5 style="color: white;">Hasil Seleksi</h5>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    {{-- <div class="card-header border-bottom pb-0 mb-3">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0"></h6>
                                <p class="text-sm"></p>
                            </div>

                        </div>
                    </div> --}}
                    <div class="table-responsive p-0 mt-3">
                        <table id="bootstrap-data-table" class="table align-items-center mb-0">
                            <thead class="bg-gray-100">
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7">Kode Pendaftaran</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Pendaftar</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7">Tanggal Lahir</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7">Alamat</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7">Status</th>
                                    {{-- <th class="text-secondary text-xs font-weight-semibold opacity-7">Aksi</th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendaftar as $data)
                                    <tr>
                                        <td>
                                            <p class="text-xs px-3 mb-0">{{ $data->kode_pendaftaran }}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center ms-1">
                                                    <h6 class="mb-0 text-sm font-weight-semibold">{{ $data->nama }}</h6>
                                                    <p class="text-sm text-secondary mb-0">{{ $data->email }}</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs px-3 mb-0">                                        {{ Carbon\Carbon::createFromFormat('Y-m-d', $data->tanggal_lahir)->format('d-m-Y') }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-xs px-3 mb-0">{{ $data->alamat }}</p>
                                        </td>
                                        <td>
                                            {{-- <p class="text-xs px-3 mb-0">{{ $data->status }}</p> --}}
                                            @if ($data->status == 'Diterima')
                                                <span
                                                    class="badge badge-sm border border-success text-success bg-success">{{ $data->status }}</span>
                                            @else
                                                <span
                                                    class="badge badge-sm border border-danger text-danger bg-danger">{{ $data->status }}</span>
                                            @endif

                                        </td>
                                        {{-- <td>
                                            <div class="d-block my-auto mb-0">
                                                @if ($data->status == 'Diterima')
                                                <a href="/pendaftar/{{ $data->id }}/edit" class="btn btn-sm mx-1"
                                                    style="background-color:rgb(66, 66, 111); color: white;">Cetak</a>

                                                @endif

                                            </div>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
