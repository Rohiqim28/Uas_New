<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

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
    return view('home.index');
});

Route::middleware(['guest'])->group(function(){

    Route::get('user',[SesiController::class,'SesiController'])->name('login');
    Route::post('user',[SesiController::class,'login']);
});

Route::middleware(['auth'])->group(function(){

    Route::get('logout',[SesiController::class,'logout']);
    route::get('admin',[homecontroller::class,'admin']);
});


route::get('/home',function(){
    return redirect('admin');
});

route::get('pengontrol',[homecontroller::class,'pengontrols'])->name('pengontrol');
route::get('jenis',[homecontroller::class,'jenis'])->name('show.jenis');

route::get('tambah',[homecontroller::class,'tambah']);
route::post('simpan',[homecontroller::class,'simpan'])->name('simpan');

route::get('admin-edit-{id}',[homecontroller::class,'edit']);
route::post('admin/update/{id}',[homecontroller::class,'update'])->name('update');
route::delete('admin/delete/{id}',[homecontroller::class,'destroy']);
route::get('print/{id}',[homecontroller::class,'print']);


route::get('jenis-tambah_jenis',[homecontroller::class,'tambah_jenis']);
route::post('/jenis-simpan_jenis',[homecontroller::class,'simpan_jenis']);
route::get('edit-{id}',[homecontroller::class,'edit_jenis']);
route::put('jenis/edit/{id}',[homecontroller::class,'update_jenis'])->name('update_jenis');
route::delete('jenis/delete/{id}',[homecontroller::class,'delete_jenis']);

route::get('/pengontrol-tambah_pengontrol',[homecontroller::class,'tambah_pengontrol']);
route::post('/pengontrol-simpan_pengontrol',[homecontroller::class,'simpan_pengontrol']);
route::get('edit_pengontrol-{id}',[homecontroller::class,'edit_pengontrol']);
route::put('edit_pengontrol-{id}',[homecontroller::class,'update_pengontrol'])->name('update_pengontrol');
route::delete('pengontrol/delete/{id}',[homecontroller::class,'delete_pengontrol']);