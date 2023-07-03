<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1>Edit Data Karyawan</h1>
                                <a href="/dashboard" class="btn btn-danger">
                                    Kembali ke Home
                                </a>
                                <form method="post" action="">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Karyawan</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Karyawan" value="{{$data->nama}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Divisi Karyawan</label>
                                        <div>
                                            <select name="id_divisi" id="serc">
                                                @foreach($divisiData as $data)
                                                <option value=" {{ $data->id}}"> {{$data->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Penilaian Karyawan</label>
                                        <div>
                                            <select name="id_penilaian" id="serc">
                                                @foreach($penilaianData as $data)
                                                <option value=" {{ $data->id}}"> {{$data->penilaian}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Kompetensi Karyawan</label>
                                        <div>
                                            <select name="id_kompetensi" id="serc">
                                                @foreach($kompetensiData as $data)
                                                <option value=" {{ $data->id}}"> {{$data->kompetensi}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Edit Karyawan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>