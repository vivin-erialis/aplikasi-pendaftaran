<div class="col-12">
    <div class="card border shadow-xs mb-4">
        <div class="card-header border-bottom pb-0 mb-3">
            <div class="d-sm-flex align-items-center">
                <div>
                    <h6 class="font-weight-semibold text-lg mb-0">Data Anggota</h6>
                    <p class="text-sm">Data anggota oragnisasi</p>
                </div>

                <div class="ms-auto d-flex">
                    <div class="mb-3 mx-2">
                        <select class="form-control form-select" aria-label="Default select example" name="kode_bidang"
                            wire:model="id_bidang">
                            @php
                                $bidang = App\Models\Bidang::get();
                            @endphp
                            <option value="">Pilih Bidang</option>

                            @foreach ($bidang as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_bidang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <a href="/cetak" target="_blank"
                        class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                        <span class="btn-inner--icon">
                            <i class="fa fa-print mx-2"></i>
                        </span>
                        <span class="btn-inner--text">Cetak Data</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="table-responsive p-0">
            <table id="bootstrap-data-table" class="table align-items-center mb-0">
                <thead class="bg-gray-100">
                    <tr>
                        {{-- <th>No</th> --}}
                        <th class="text-secondary text-xs font-weight-semibold opacity-7">Kode Anggota</th>
                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Anggota</th>
                        {{-- <th class="text-secondary text-xs font-weight-semibold opacity-7">Tanggal Lahir</th> --}}
                        <th class="text-secondary text-xs font-weight-semibold opacity-7">Bidang</th>
                        <th class="text-secondary text-xs font-weight-semibold opacity-7">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $data)
                        <tr>
                            <td>
                                <p class="text-xs px-3 mb-0">{{ $data->kode_anggota }}</p>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex align-items-center">
                                        <img src="../images/foto/{{ $data->foto }}" alt="{{ $data->foto }}"
                                            style="height: 150px; width:100%;" class="me-3">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center ms-1">
                                        <h6 class="mb-0 text-sm font-weight-semibold">{{ $data->nama }}</h6>

                                        <p class="text-xs text-secondary mb-0 mt-1">{{ $data->email }}</p>

                                    </div>
                                </div>
                            </td>
                            {{-- <td> <p class="text-xs">{{ Carbon\Carbon::createFromFormat('Y-m-d', $data->tanggal_lahir)->format('d-m-Y') }}</p>
                                </td> --}}
                            <td>
                                <p class="text-xs px-3 mb-0">{{ $data->bidang->nama_bidang }}</p>
                            </td>
                            <td>
                                <div class="d-block my-auto mb-0">
                                    <a href="/anggota/{{ $data->id }}/edit" class="btn btn-sm mx-1"
                                        style="background-color:rgb(66, 66, 111); color: white;">Edit</a>
                                    <a href="/anggota/{{ $data->id }}" class="btn btn-sm mx-1"
                                        style="background-color:rgb(217, 151, 60); color: white;">Detail</a>
                                    {{-- <form action="/anggota/{{ $data->id }}" method="post" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger btn-sm" type="submit"
                                                onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
                                        </form> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
