<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UDB;
use App\Models\kelolakelas;


class UDBController extends Controller
{
    public function index()
    {
        $UDB = UDB::All();
        $kelolakelas = kelolakelas::All();


        return view('kelolapembayaran_UDB', compact('UDB', 'kelolakelas'));
    }
    public function store(Request $req)
    {
        $UDB = new UDB;

            $UDB->jurusan = $req->get('jurusan');
            $UDB->kelas = $req->get('kelas');
            $UDB->tahun_pelajaran = $req->get('tahun_pelajaran');
            $UDB->wali_kelas = $req->get('wali_kelas');

        $UDB->save();

        $notification = array(
            'message' =>'Data User berhasil ditambahkan', 'alert-type' =>'success'
        );

        return redirect()->route('UDB')->with($notification);
    }

    public function getDataUser($id){

        $UDB = UDB::find($id);

        return response()->json($UDB);
    }

    public function edit(Request $req)
    {
        $UDB = UDB::find($req->get('id'));

        $UDB->jurusan = $req->get('jurusan');
        $UDB->kelas = $req->get('kelas');
        $UDB->tahun_pelajaran = $req->get('tahun_pelajaran');
        $UDB->wali_kelas = $req->get('wali_kelas');

        $UDB->save();

        $notification = array(
            'message' => 'Data User berhasil diubah',
            'alert-type' => 'success'
        );

        return redirect()->route('UDB')->with($notification);
    }


    public function hapus($id)
    {
        $UDB = UDB::find($id);

        $UDB->delete();

        $notification = array(
            'message' => 'Data User berhasil dihapus',
            'alert-type' => 'success'
        );

        return redirect()->route('UDB')->with($notification);
    }

}
