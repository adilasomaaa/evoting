<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Kandidat;
use App\Voting;
use Hash;
use Alert;

class PemilihanController extends Controller
{
    public function index()
    {
        $title = 'List Kandidat';
        $data = Kandidat::orderBy('no_urut','asc')->get();

        return view('pemilihan.index',compact('title','data'));
    }

    public function voting($id)
    {
        
        $data = Voting::firstOrCreate(
            ['user_id'=> \Auth::user()->id],
            ['kandidat_id'=> $id, 'user_id'=>\Auth::user()->id]
        );
        if(!$data->wasRecentlyCreated){
            Alert::error('Gagal','Anda sudah menggunakan suara anda');
            return redirect('pemilihan');
        }
        Alert::success('Sukses','Suara anda berhasil diinput');
        return redirect('pemilihan');
         
        
    }
}
