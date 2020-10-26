<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voting;
use App\Kandidat;

class GrafikController extends Controller
{
    public function index()
    {
        $title = 'Hasil Polling';
        $hasil = [];

        $kandidat = Kandidat::get();
        foreach($kandidat as $key => $kd) {
            $id_kandidat = $kd->id;
            $no_urut = $kd->no_urut;
            $total = Voting::where('kandidat_id', $id_kandidat)->count();

            $a['name'] = $no_urut;
            $a['y'] = $total;
            array_push($hasil, $a);
        }

        return view('grafik.index', compact('title','hasil'));
    }
}
