<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    public function index()

    {
      return view('siswas.index', [
        'siswas' => siswa::get(), 
      ]);
    }

    public function tambah()

    {
      return view('siswas.tambah');
    }

    public function simpan(Request $request)

    {
      $siswa = new siswa();
      $siswa->nama = $request->nama;
      $siswa->nis = $request->nis;
      $siswa->alamat = $request->alamat;
      $siswa->jurusan = $request->jurusan;

      $siswa->save();

      return redirect()->route('siswas.index');
    }

    public function edit($id)

    {
      $siswa = siswa::find($id);

      return view('siswas.edit', [
        'siswa' => $siswa,
      ]);
    }

    public function update(Request $request, $id)

    {
      $siswa = siswa::find($id);
      $siswa->nama = $request->nama;
      $siswa->nis = $request->nis;
      $siswa->alamat = $request->alamat;
      $siswa->jurusan = $request->jurusan;

      $siswa->save();

      return redirect()->route('siswas.index');
    }

    public function hapus($id)
    {
      $siswa = siswa::find($id);
      $siswa->delete();
      return redirect()->route('siswas.index');
    }

}