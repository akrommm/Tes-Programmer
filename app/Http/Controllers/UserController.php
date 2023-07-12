<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $data['list_user'] = User::all();
        return view('user.index', $data);
    }

    function create()
    {
        return view('user.create');
    }

    function store()
    {
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = request('password');
        $user->save();

        $user->handleUploadFoto();

        return redirect('admin/user')->with('success', 'Data User Berhasil Ditambahkan');
    }

    public function show($id)
    {
        return view('user.show', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('user.edit', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function update($id)
    {
        $user = User::find($id);
        if (request('nama')) $user->nama = request('nama');
        if (request('username')) $user->username = request('username');
        if (request('password')) $user->password = request('password');
        $user->save();

        if (request('foto')) $user->handleUploadFoto();

        return redirect()->to('admin/user/'. $user->id)->with('success', 'Data Berhasil Diedit');
    }

    function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->to('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}
