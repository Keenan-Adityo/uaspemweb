<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Karyawan;
use App\Models\Kompetensi;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function showAll()
    {
        $karyawanData = Karyawan::query()->get();
        $kompetensiData = Kompetensi::query()->get();
        $divisiData = Divisi::query()->get();
        $penilaianData = Penilaian::query()->get();
        $data = [
            'datas' => $karyawanData,
            'kompetensiData' => $kompetensiData,
            'divisiData' => $divisiData,
            'penilaianData' => $penilaianData,
            'number' => 1
        ];
        return view('dashboard', $data);
    }

    public function add()
    {
        $kompetensiData = Kompetensi::query()->get();
        $divisiData = Divisi::query()->get();
        $penilaianData = Penilaian::query()->get();
        $data = [
            'kompetensiData' => $kompetensiData,
            'divisiData' => $divisiData,
            'penilaianData' => $penilaianData,
            'number' => 1
        ];
        return view('pages/create_karyawan', $data);
    }

    public function create(Request $request)
    {
        $karyawan = new Karyawan;
        $karyawan->nama = $request->nama;
        $karyawan->divisi_id = $request->id_divisi;
        $karyawan->penilaian_id = $request->id_penilaian;
        $karyawan->kompetensi_id = $request->id_kompetensi;
        $karyawan->save();
        return redirect('/dashboard');
    }

    public function edit(int $id)
    {
        $kompetensiData = Kompetensi::query()->get();
        $divisiData = Divisi::query()->get();
        $penilaianData = Penilaian::query()->get();
        $dataKaryawan = Karyawan::query()
            ->where('id', $id)
            ->first();
        $data = [
            'kompetensiData' => $kompetensiData,
            'divisiData' => $divisiData,
            'penilaianData' => $penilaianData,
            'data' => $dataKaryawan
        ];
        return view('pages/edit_karyawan', $data);
    }

    public function updateData(int $id, Request $request)
    {
        $karyawan = Karyawan::find($id);
        if($karyawan->id != $id) {
            return redirect('/dashboard');
        }
        $karyawan->nama = $request->nama;
        $karyawan->divisi_id = $request->id_divisi;
        $karyawan->penilaian_id = $request->id_penilaian;
        $karyawan->kompetensi_id = $request->id_kompetensi;
        $karyawan->save();  
        return redirect('/dashboard');
    }

    public function delete(int $id)
    {
        $karyawan = Karyawan::find($id);
        if($karyawan->id != $id) {
            return redirect('/dashboard');
        }
        $karyawan->delete();
        return redirect('/dashboard');
    }
}
