<?php

namespace App\Http\Controllers;
use App\Models\Anggota;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // cek data
    public function cekObject(){
        $anggota = new Anggota;

        dump($anggota);
    }

    // tambah data
    public function insert(){
        $anggota = new Anggota;
        $anggota->nip='31232133';
        $anggota->nama='dika';
        $anggota->tanggal_lahir='2001-12-31';
        $anggota->nilai='3.2';
        $anggota->save();
        echo "data berhasil disimpan";
    }

    //update data
    public function update(){
        $anggota = Anggota::find(2);
        $anggota->nama='dono';
        $anggota->nilai='3.0';
        $anggota->save();
        echo "data berhasil diupdate";
    }

    //delete data
    public function delete(){
        $anggota = Anggota::find(2);
        $anggota->delete();
        echo " data berhasil di hapus";
    }

    // menampilkan semua data
    public function all(){
        $result= Anggota::all();
        return view('tampilkan_anggota',['anggotas'=>$result]);
        // dump($result);

    }

    // mencari data berdasarkan ID
    public function find(){
        $result=Anggota::find(5);
        return view('tampilkan_anggota',['anggotas'=>[$result]]);
        // dump($result);
    }

    // mencari data
    public function getWhere(){
        $result = Anggota::where('nilai','>','3.3')
            ->orderBy('nama', 'desc')
            ->get();
        return view('tampilkan_anggota',['anggotas' => $result]);
    }
}
