<style>
    body {
        font-family: Arial, sans-serif;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h1 {
        font-size: 24px;
        margin: 0;
    }

    .date {
        font-size: 16px;
    }

    .laporan-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .laporan-table th,
    .laporan-table td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    .laporan-table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .laporan-table td {}
</style>

<div class="header">
    <h1>Daftar Anggota Organisasi</h1>
    <hr>

</div>
<table class="laporan-table">
    <thead class="bg-gray-100">
        <tr>
            {{-- <th>No</th> --}}
            <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>

            <th class="text-secondary text-xs font-weight-semibold opacity-7">Kode Anggota</th>
            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Nama</th>
            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Tanggal Lahir</th>
            <th class="text-secondary text-xs font-weight-semibold opacity-7">Email/HP</th>
            <th class="text-secondary text-xs font-weight-semibold opacity-7">Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($anggota as $data)
            <tr>
                {{-- <td>
                    <img src="{{public_path('/images/foto/'.$data->foto)}}"
                    style="height:10%">
                </td> --}}
                <td>{{ $loop->iteration }}</td>
                <td>
                    <p class="text-xs  mb-0">{{ $data->kode_anggota }}</p>
                </td>
                <td>
                    <div class="d-flex ">
                        <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $data->nama }}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs">
                        {{ Carbon\Carbon::createFromFormat('Y-m-d', $data->tanggal_lahir)->format('d-m-Y') }}</p>
                </td>
                <td>
                    <p class="text-xs  mb-0">{{ $data->email }}
                    <p>{{ $data->nohp }}</p>
                    </p>
                </td>
                <td>
                    <p class="text-xs  mb-0">{{ $data->alamat }}</p>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
