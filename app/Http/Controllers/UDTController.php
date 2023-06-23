<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UDT;
use App\Models\kelolakelas;

class UDTController extends Controller
{
    public function index()
    {
        $UDB = UDT::All();
        $kelolakelas = kelolakelas::All();


        return view('kelolapembayaran_UDB', compact('UDT', 'kelolakelas'));
    }
    public function store(Request $req)
    {
        $UDT = new UDT;

            $UDT->jurusan = $req->get('jurusan');
            $UDT->kelas = $req->get('kelas');
            $UDT->tahun_pelajaran = $req->get('tahun_pelajaran');
            $UDT->wali_kelas = $req->get('wali_kelas');

        $UDT->save();

        $notification = array(
            'message' =>'Data User berhasil ditambahkan', 'alert-type' =>'success'
        );

        return redirect()->route('UDT')->with($notification);
    }

    public function getDataUser($id){

        $UDT = UDT::find($id);

        return response()->json($UDT);
    }

    public function edit(Request $req)
    {
        $UDT = UDT::find($req->get('id'));

        $UDT->jurusan = $req->get('jurusan');
        $UDT->kelas = $req->get('kelas');
        $UDT->tahun_pelajaran = $req->get('tahun_pelajaran');
        $UDT->wali_kelas = $req->get('wali_kelas');

        $UDT->save();

        $notification = array(
            'message' => 'Data User berhasil diubah',
            'alert-type' => 'success'
        );

        return redirect()->route('UDT')->with($notification);
    }


    public function hapus($id)
    {
        $UDT = UDT::find($id);

        $UDT->delete();

        $notification = array(
            'message' => 'Data User berhasil dihapus',
            'alert-type' => 'success'
        );

        return redirect()->route('UDT')->with($notification);
    }

}
