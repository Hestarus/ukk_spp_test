<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $i = 1;
        // dd($request);
        $users = Siswa::all();
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view('admin.home', compact(['kelas', 'spp', 'users', 'i']));
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view('admin.editSiswa', compact(['kelas', 'spp', 'siswa']));
    }

    public function homePetugas()
    {
        $i = 1;
        $petugas = User::all();
        return view('admin.dataPetugas', compact(['petugas', 'i']));
    }

    public function petugas_edit($id)
    {
        $petugas = User::find($id);
        return view('admin.editPegawai', compact(['petugas']));
    }
}
