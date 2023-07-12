<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function index()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('mahasiswa.index', $data);
    }

    function create()
    {
        return view('mahasiswa.create');
    }

    function store()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = request('nama');
        $mahasiswa->nim = request('nim');
        $mahasiswa->no_hp = request('no_hp');
        $mahasiswa->prodi = request('prodi');
        $mahasiswa->save();

        return redirect('admin/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    public function show($id)
    {
        return view('mahasiswa.show', [
            'mahasiswa' => Mahasiswa::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('mahasiswa.edit', [
            'mahasiswa' => Mahasiswa::findOrFail($id)
        ]);
    }

    public function update($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if (request('nama')) $mahasiswa->nama = request('nama');
        if (request('nim')) $mahasiswa->nim = request('nim');
        if (request('prodi')) $mahasiswa->prodi = request('prodi');
        if (request('no_hp')) $mahasiswa->no_hp = request('no_hp');
        $mahasiswa->save();

        return redirect()->to('admin/mahasiswa')->with('success', 'Data Berhasil Diedit');
    }

    function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->to('admin/mahasiswa')->with('danger', 'Data Berhasil Dihapus');
    }
}
