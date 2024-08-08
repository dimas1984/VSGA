<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LevelController extends Controller
{
    //
    public function index()
    {
        // //tambah data
        // DB::insert('insert into m_level(level_kode,level_nama,created_at)values(?,?,?)',['cus','Pelanggan',now()]);
        // return 'insert data baru berhasil diinput';

        //     //update data
        //    $row= DB::update('update m_level set level_nama=? where level_kode=?',['Customer','CUS']);
        //     return 'Update berhasil, jumlah data yang diupdate'.$row.'baris';

        // // delete data
        // $row = DB::delete('delete from m_level where level_kode=?',['cus']);
        // return 'delete data berhasil, jumlah data yang dihapus'.$row. 'baris';

        //menampilkan data
        $data = DB::select('select * from m_level');
        return view( 'level',['data'=>$data]);
    }
}
