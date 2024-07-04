<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $list_pegawai = Pegawai::get();

        return view('pegawai.index', [
            'title' => 'List Pegawai',
            'header' => 'List Pegawai',
            'list_pegawai' => $list_pegawai,
        ]);
    }

    public function create()
    {
        return view('pegawai.create', [
            'title' => 'Tambah Pegawai',
            'header' => 'Tambah Pegawai',
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fileName = time() . '.' . $request->gambar->extension();

        $request->gambar->storeAs('public/profil', $fileName);
        Pegawai::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'gambar' => $fileName,
        ]);

        return redirect()->route('pegawai.index')->with('message', 'Data berhasil ditambahkan');
    }
    public function show($id)
    {
        $pegawai = Pegawai::find($id);

        return view('pegawai.show', [
            'title' => 'Detail Pegawai',
            'header' => 'Detail Pegawai',
            'pegawai' => $pegawai,
        ]);
    }
    public function api()
    {
        $list_pegawai = Pegawai::all();
        return response()->json($list_pegawai);
    }
}
