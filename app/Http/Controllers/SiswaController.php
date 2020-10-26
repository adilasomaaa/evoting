<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Siswa, User};
use Hash;
use Alert;

class SiswaController extends Controller
{
    public function index()
    {
        $title = 'List Siswa';
        $data = Siswa::orderBy('nama','asc')->get();

        return view('siswa.index',compact('title','data'));
    }
    public function add()
    {
        $title = 'Tambah Siswa';

        return view('siswa.add', compact('title'));
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email  = $request->email;
        $kelas = $request->kelas;
        $password = Hash::make($request->password);
  
        $data = new User;
        $data->name  = $name;
        $data->email  = $email;
        $data->password  = $password;
        $data->save();

        $usr = new Siswa;
        $usr->user_id = $data->id;
        $usr->nama = $name;
        $usr->kelas = $kelas;
        $usr->email = $email;
        $usr->password = $password;
        $usr->save();

        Alert::success('Sukses','Pilihan anda  berhasil diinput');
        return redirect('siswa');
    }

    public function edit($id)
    {
        $title = 'Tambah Siswa';
        $dt = Siswa::find($id);
        
        return view('siswa.edit', compact('title','dt'));
    }

    public function update(request $request, $id)
    {
        $name = $request->name;
        $email  = $request->email;
        $kelas = $request->kelas;
        $password = Hash::make($request->password);
  
        $data = User::find($id);
        $data->password = $password;
        $data->save();

        $usr = Siswa::find($id);
        $usr->user_id = $data->id;
        $usr->nama = $name;
        $usr->kelas = $kelas;
        $usr->email = $email;
        $usr->password = $password;
        $usr->save();

        Alert::success('Sukses','Data berhasil diubah');
        return  redirect('siswa');

    }

}
