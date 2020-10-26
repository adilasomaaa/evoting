<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Selamat Datang di Website Pemilhan Ketua OSIS 2020';
        return view ('admin\adminlte', compact('title'));
    }
}
