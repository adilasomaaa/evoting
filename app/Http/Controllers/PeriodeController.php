<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periode;
use Alert;
class PeriodeController extends Controller
{
    public function index()
    {
        $title = 'Periode Pemilihan';
        $dari = Periode::orderBy('tanggal','asc')->first();
        $sampai = Periode::orderBy('tanggal','desc')->first();

        return view('periode.index', compact('title','dari','sampai'));
    }

    public function set(Request $request)
    {
        $dari = $requeset->dari;
        $sampai = $request->sampai;

        $tanggal1 = date('Y-m-d', strtotime($dari));
        $tanggal2 = date('Y-m-d', strtotime($sampai));

        \DB::table('periode')->delete();
        
        while ($tanggal1 <= $tanggal2) {
            $data = new Periode;
            $data->tanggal = $tanggal1;
            $data->save();

            $tanggal1 = date('Y-m-d', strtotime('+1 days', strtotime($tanggal1)));
        }
        Alert::success('Sukses','Data berhasil disimpan');
        return redirect()->back();

    }
}
