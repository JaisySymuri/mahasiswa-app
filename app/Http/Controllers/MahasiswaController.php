<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    public function store(Request $request)
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
        ]);

        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::findOrFail($id);

        $mhs->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);

        return redirect('/');
    }
}
