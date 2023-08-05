<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homemodel;
use App\Models\jenis_pelanggaran;
use App\Models\pengontrol;
use App\Models\tambah;

class homecontroller extends Controller
{
    public function index()
    {   $data=homemodel::all();
        return view('home.index',compact('data'),['title'=> 'Dashboard']);
    }
    public function admin(){
        $data=tambah::all();
        return view('admin.pelanggaran',compact('data'),['title'=> 'Pelanggaran']);
    }
    public function pengontrols(){
        $data=pengontrol::all();
        return view('admin.pengontrol',compact('data'),['title'=> 'Pengontrol']);
    }
    public function jenis(){
        $data=jenis_pelanggaran::all();
        return view('admin.jenis',compact('data'),['title'=> 'Jenis Pelanggaran']);
    }
    public function tambah(Request $request)
    { 
        $pelanggaran=jenis_pelanggaran::all();
        return view('input.tambah_pelanggaran',compact('pelanggaran'),['title'=> 'tambah']);
    }

    public function simpan(Request $request){
        $simpan=tambah::create([
            'nama_santri'=>$request->nama_santri,
            'jenis_pelanggaran'=>$request->jenis_pelanggaran,
            'asrama'=>$request->asrama,
            'tgl'=>$request->tgl,
            'waktu'=>$request->waktu
        ]);
        $data=tambah::all();
        return view('admin.pelanggaran',[
            'title'=>'pelanggaran',
            'data' => $data
        ]);
        // dd($request->except(['_token','submit']));

    }

    public function edit(Request $request, $id){
        $data = tambah::where('id','=', $id)->first();
        $jenis_pelanggaran = jenis_pelanggaran::all();
        return view('edit.edit', compact('data'),[
            'jenis_pelanggaran' => $jenis_pelanggaran
        ]);
    }

    public function update(Request $request, $id){
        $data = tambah::where('id'
        ,$id)->first();

        $data->nama_santri = $request->nama_santri;
        $data->jenis_pelanggaran = $request->jenis_pelanggaran;
        $data->asrama = $request->asrama;
        $data->tgl = $request->tgl;
        $data->save();

        return redirect('admin');
    }
    public function tambah_jenis(){
        return view('input.tambah_jenis',['title'=> 'Jenis_pelanggaran']);
    }
    public function simpan_jenis(Request $request){

        $simpan=jenis_pelanggaran::create($request->except('_token'));
        return redirect()->route('show.jenis');
    }
    public function destroy($id){
        $data=tambah::find($id);
        $data->delete();
        return redirect('admin');

    }


    public function edit_jenis($id){
        $jenis=jenis_pelanggaran::find($id);
        return view('edit.edit_jenis',compact('jenis'));   
    }
    public function update_jenis($id, Request $request){
        $jenis=jenis_pelanggaran::where('id',$id)->first();

        $jenis->nama_pelanggaran = $request->nama_pelanggaran;
        $jenis->sanksi = $request->sanksi;

        $jenis->save();

        return redirect('jenis');
    }
    public function delete_jenis($id){
        $data=jenis_pelanggaran::find($id);
        $data->delete();
        return redirect('jenis');

    }
    public function print($id){
        $data=homemodel::find($id);
        return view('surat.surat',compact('data'));
    }

    public function tambah_pengontrol(){
        return view('input.tambah_pengontrol');
    }
    public function simpan_pengontrol(Request $request){
        $simpan=pengontrol::create($request->except('_token'));
        return redirect()->route('pengontrol');
    }
    public function edit_pengontrol($id){
        $data=pengontrol::find($id);
        return view('edit.edit_pengontrol',compact('data'));
    }
    public function update_pengontrol($id, Request $request){
        $data=pengontrol::where('id',$id)->first();

        $data->nama = $request->nama;
        $data->daerah_kontrol = $request->daerah_kontrol;

        $data->save();

        return redirect('pengontrol');
    }
    public function delete_pengontrol($id){
        $data=pengontrol::find($id);
        $data->delete();
        return redirect('pengontrol');
    }


    
}
