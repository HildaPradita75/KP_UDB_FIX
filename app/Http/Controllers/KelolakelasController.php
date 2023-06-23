<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelolakelas;


class KelolakelasController extends Controller
{
    public function index()
    {
        $kelolakelas = kelolakelas::All();

        return view('kelolakelas', compact('kelolakelas'));
    }
    public function store(Request $req)
    {
        $kelolakelas = new kelolakelas;

            $kelolakelas->jurusan = $req->get('jurusan');
            $kelolakelas->kelas = $req->get('kelas');
            $kelolakelas->sub_kelas = $req->get('sub_kelas');
            $kelolakelas->tahun_pelajaran = $req->get('tahun_pelajaran');
            $kelolakelas->wali_kelas = $req->get('wali_kelas');

        $kelolakelas->save();

        $notification = array(
            'message' =>'Data User berhasil ditambahkan', 'alert-type' =>'success'
        );

        return redirect()->route('kelolakelas')->with($notification);
    }

    public function getDataUser($id){

        $kelolakelas = kelolakelas::find($id);

        return response()->json($kelolakelas);
    }

    public function edit(Request $req)
    {
        $kelolakelas = kelolakelas::find($req->get('id'));

        $kelolakelas->jurusan = $req->get('jurusan');
        $kelolakelas->kelas = $req->get('kelas');
        $kelolakelas->sub_kelas = $req->get('sub_kelas');
        $kelolakelas->tahun_pelajaran = $req->get('tahun_pelajaran');
        $kelolakelas->wali_kelas = $req->get('wali_kelas');

        $kelolakelas->save();

        $notification = array(
            'message' => 'Data User berhasil diubah',
            'alert-type' => 'success'
        );

        return redirect()->route('kelolakelas')->with($notification);
    }


    public function hapus($id)
    {
        $kelolakelas = kelolakelas::find($id);

        $kelolakelas->delete();

        $notification = array(
            'message' => 'Data User berhasil dihapus',
            'alert-type' => 'success'
        );

        return redirect()->route('kelolakelas')->with($notification);
    }

}
