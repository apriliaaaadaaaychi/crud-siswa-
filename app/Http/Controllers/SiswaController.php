<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // 1. Menampilkan semua data siswa
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    // 2. Menampilkan form tambah data
    public function create()
    {
        return view('siswa.create');
    }

    // 3. Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'kelas' => 'required',
        ]);

        Siswa::create([
            'nama'  => $request->nama,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan!');
    }

    // 4. Menampilkan form edit data
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    // 5. Mengupdate data di database
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama'  => 'required',
            'kelas' => 'required',
        ]);

        $siswa->update([
            'nama'  => $request->nama,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui!');
    }

    // 6. Menghapus data
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus!');
    }
}