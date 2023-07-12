<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    function index()
    {
        $data['list_nilai'] = Nilai::all();
        return view('nilai.index', $data);
    }

    function create()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('nilai.create', $data);
    }

    function store(Request $request)
    {
        $nilai = new Nilai();
        $nilai->id_mahasiswa = request('id_mahasiswa');
        $nilai->mata_kuliah = request('mata_kuliah');
        $nilai->nilai = request('nilai');
        $nilai->grade = $this->calculateGrade(request('nilai'));
        $nilai->save();


        return redirect('admin/nilai')->with('success', 'Data Nilai Berhasil Ditambahkan');
    }

    public function show($id)
    {
        return view('nilai.show', [
            'nilai' => Nilai::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        $list_mahasiswa = Mahasiswa::all();
        return view('nilai.edit',compact('list_mahasiswa', 'nilai'));
    }

    public function update($id)
    {
        $nilai = Nilai::find($id);
        if (request('id_mahasiswa')) $nilai->id_mahasiswa = request('id_mahasiswa');
        if (request('mata_kuliah')) $nilai->mata_kuliah = request('mata_kuliah');
        if (request('nilai')) $nilai->nilai = request('nilai');
        $nilai->grade = $this->calculateGrade(request('nilai'));
        $nilai->save();

        return redirect()->to('admin/nilai')->with('success', 'Data Berhasil Diedit');
    }

    function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        return redirect()->to('admin/nilai')->with('danger', 'Data Berhasil Dihapus');
    }

    private function calculateGrade($nilai)
    {
        if ($nilai >= 85) {
            return 'A';
        } elseif ($nilai >= 75) {
            return 'B';
        } elseif ($nilai >= 65) {
            return 'C';
        } elseif ($nilai >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }
}
