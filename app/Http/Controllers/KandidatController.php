<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use Alert;

class KandidatController extends Controller
{
    public function index()
    {
        $title = 'List Kandidat';
        $data = Kandidat::orderBy('no_urut', 'asc')->get();

        return view('kandidat.index',compact('title','data'));
    }
    public function show($id)
    {
        $title = 'Detail Kandidat';
        $dt = Kandidat::find($id);

        return view('kandidat.show', compact('title','dt'));
    }

    public function add()
    {
        $title = 'Tambah Kandidat';
        return view('kandidat.add', compact('title'));
    }

    public function store(request $request)
    {
        $no_urut = $request->no_urut;
        $calon_ketua  = $request->calon_ketua;
        $calon_wakil  = $request->calon_wakil;
        $visi_misi  = $request->visi_misi;

        $file = $request->file('photo');
        if($file){
            $nama_photo = rand().$file->getClientOriginalName();
            $file->move('photo_mahasiswa', $nama_photo);
            $photo = 'photo_mahasiswa/' .$nama_photo;
        }else  {
            $photo  =  '';
        }
  
        $data = new Kandidat;
        $data->no_urut  = $no_urut;
        $data->calon_ketua  = $calon_ketua;
        $data->calon_wakil  = $calon_wakil;
        $data->visi_misi  = $visi_misi;
        $data->photo  = $photo;
        $data->save();

        Alert::success('sukses','Data berhasil ditambah');
        return redirect('kandidat');
    }

    public function edit($id)
    {
        $title = 'Edit Kandidat';
        $dt = Kandidat::find($id);
        return view('kandidat.edit', compact('title','dt'));
    }

    public function update(request $request, $id)
    {
        $no_urut = $request->no_urut;
        $calon_ketua  = $request->calon_ketua;
        $calon_wakil  = $request->calon_wakil;
        $visi_misi  = $request->visi_misi;
        $data = Kandidat::find($id);

        $file = $request->file('photo');
        if($file){
            $nama_photo = rand().$file->getClientOriginalName();
            $file->move('photo_mahasiswa', $nama_photo);
            $photo = 'photo_mahasiswa/' .$nama_photo;
        }else{
            $photo = $data->photo;
        }
  
        
        $data->no_urut  = $no_urut;
        $data->calon_ketua  = $calon_ketua;
        $data->calon_wakil  = $calon_wakil;
        $data->visi_misi  = $visi_misi;
        $data->photo  = $photo;
        $data->save();

        Alert::success('Sukses','Data berhasil diubah');
        return redirect('kandidat');
    }

    public function delete($id)
    {
        // DB::table('kandidats')-> where('id', $id)-> delete();
        Kandidat::where('id', $id)->delete();
        Alert::success('sukses','Data berhasil dihapus');
        return redirect('kandidat');
    }
}
