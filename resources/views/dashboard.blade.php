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
                    <h1>Sistem Penilaian Karyawan Keenan</h1>
                    <div class="mb-3">
                        <a href="/add" class="btn btn-primary mb-3">Tambah Karyawan</a>
                    </div>

                    <table class="table table-striped table-bordered mx-auto mt-3" style="width: 80%;">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Penilaian</th>
                                <th scope="col">Kompetensi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <th scope="row">{{$number++}}</th>
                                <td>{{ $data->nama}}</td>
                                <td>{{ $divisiData[$data->divisi_id - 1]->nama}}</td>
                                <td>{{ $penilaianData[$data->penilaian_id - 1]->penilaian}}</td>
                                <td>{{ $kompetensiData[$data->kompetensi_id - 1]->kompetensi}}</td>
                                <td>
                                    <div class="flex flex-row">
                                        <a href='/edit/{{$data->id}}'>
                                            <button class="btn btn-primary">Edit</button>
                                        </a>
                                        <form action='/delete/{{$data->id}}' method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger mx-2">Hapus Karyawan</button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>