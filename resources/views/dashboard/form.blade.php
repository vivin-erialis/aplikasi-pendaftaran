@extends('dashboard.dashboard')
@section('title', 'Halaman Pendaftaran')
@section('content')
<section>
    <div class="p-4">
        <div class="container px-3" style="background-color: white; border-radius:9px;">
            <div class="card-header border-bottom mb-3pb-0 text-left bg-transparent text-center mt-5 p-4">
                <h3 class="font-weight-black text-dark display-6">Form Pendaftaran</h3>
                <p class="mb-0">Daftar sebagai anggota, isi data berikut. </p>
                {{-- <a href="/cetakformulir" style="font-size: 13px; color:blue;">Cetak Formulir Anda</a> --}}
            </div>
            <div class="row">

                <div class=" col-md-12 d-flex flex-column mx-auto">
                    <div class="row">
                        <div class="col mt-3 ">
                            @if (session()->has('pesan'))
                                <div class="alert d-flex align-items-center"
                                    style="background-color: rgb(66, 66, 111); color: white;" role="alert">
                                    {{ session('pesan') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card card-plain mt-3">
                        <div class="card-body">
                            <form role="form" action="/pendaftaran" method="post"
                                enctype="multipart/form-data">
                                @csrf
                               <div class="row">
                                <div class="col-md-6">
                                    <label>Nama</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="masukan nama"
                                            aria-label="Name" aria-describedby="name-addon" name="nama" required>
                                    </div>
                                    <label>Foto</label>
                                    <div class="mb-3">
                                        <input type="file" class="form-control"
                                            placeholder="Enter your email address" aria-label="Email"
                                            aria-describedby="email-addon" name="foto" required>
                                    </div>
                                    <label>Tanggal Lahir</label>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" placeholder=""
                                            aria-label="Password" aria-describedby="password-addon"
                                            name="tanggal_lahir" required>
                                    </div>
                                    <label for="">Jenis Kelamin</label>
                                    <div class="mb-3">
                                        <input type="radio" name="jenis_kelamin" value="Lak-laki" id="radio_pria">
                                        <label for="radio_pria">Laki-laki</label>

                                        <input type="radio" class="" name="jenis_kelamin" value="Perempuan" id="radio_wanita">
                                        <label for="radio_wanita">Perempuan</label>
                                    </div>
                                    <label>Alamat</label>
                                    <div class="mb-3">
                                        <textarea type="text" class="form-control" placeholder="masukan alamat" aria-label="Name"
                                            aria-describedby="name-addon" style="height: 60px" name="alamat" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>No Handphone</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control"
                                            placeholder="masukan nomor handphone" aria-label="Name"
                                            aria-describedby="name-addon" name="nohp" required>
                                    </div>
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control"
                                            placeholder="masukan email" aria-label="Name"
                                            aria-describedby="name-addon" name="email" required>
                                    </div>
                                    <label>Bidang</label>
                                    <div class="mb-3">
                                        <select class="form-control form-select"
                                            aria-label="Default select example" name="kode_bidang" required>
                                            @php
                                                $bidang = App\Models\Bidang::get();
                                            @endphp
                                            @foreach ($bidang as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_bidang }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label>Alasan</label>
                                    <div class="mb-3">
                                        <textarea type="email" class="form-control" placeholder="masukan alasan" aria-label="Password"
                                            aria-describedby="password-addon" name="alasan" required></textarea>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-dark w-100 mt-4 mb-3">Daftar</button>
                                    </div>
                                </div>
                               </div>


                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
