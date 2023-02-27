<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminSiswaController extends Controller
{
    public function store(Request $request)
    {
        Siswa::create($request->except('_token', 'submit'));
        return redirect('/admin/home');
    }

    public function update($id, Request $request)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->except('_token', '_method', 'submit'));
        return redirect('/admin/home');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/admin/home');
    }
}
