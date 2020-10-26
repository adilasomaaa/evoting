<?php

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group((['middleware' => 'auth']), function () {
    Route::get('admin' , 'AdminController@index');
    //Siswa
    Route::get('siswa' , 'SiswaController@index');
    Route::get('siswa/add' , 'SiswaController@add');
    Route::post('siswa/add' , 'SiswaController@store');
    Route::get('siswa/{id}' , 'SiswaController@edit');
    Route::put('siswa/{id}' , 'SiswaController@update');

    
    //Kandidat
        Route::get('kandidat/add' , 'KandidatController@add');
        Route::get('kandidat/detail/{id}' , 'KandidatController@show');
        Route::post('kandidat/add' , 'KandidatController@store');
        Route::get('kandidat' , 'KandidatController@index');
        Route::get('kandidat/{id}' , 'KandidatController@edit');
        Route::put('kandidat/{id}' , 'KandidatController@update');
        Route::get('kandidat/delete/{id}' , 'KandidatController@delete');
    
    //Pemilihan
    Route::get('pemilihan','PemilihanController@index');
    Route::get('pemilihan/vote/{id}','PemilihanController@voting');

    //Periode
    Route::get('periode','PeriodeController@index');
    Route::post('periode','PeriodeController@set');

    //Grafik
    Route::get('grafik','GrafikController@index');

    //Forgot Password
    
});

Route::get('logout', function(){
    \Auth::logout();
    return redirect('login');
});
Route::get('/home', 'HomeController@index')->name('home');
