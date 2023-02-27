<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminPetugasController extends Controller
{
    public function store(Request $request)
    {
        User::create([
            'nama_petugas' => $request['nama_petugas'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'type' => 2,
        ]);
        return redirect('/admin/petugas');
    }

    public function update($id, Request $request)
    {
        $petugas = User::find($id);
        $petugas->update($request->except('_token', '_method', 'submit'));
        return redirect('/admin/petugas');
    }

    public function destroy($id)
    {
        $petugas = User::find($id);
        $petugas->delete();
        return redirect('/admin/petugas');
    }
}
