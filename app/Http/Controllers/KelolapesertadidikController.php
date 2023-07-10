<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelolapesertadidik;

class KelolapesertadidikController extends Controller
{
    public function index()
    {

        $d = kelolapesertadidik::All();

        // dd($d);

        return view('kelolapesertadidik', compact('d'));

    }

    public function store(Request $req)
    {
        $kelolapesertadidik = new kelolapesertadidik;

            $kelolapesertadidik->tingkat = $req->get('tingkat');
            $kelolapesertadidik->jurusan = $req->get('jurusan');
            $kelolapesertadidik->kelas = $req->get('kelas');
            $kelolapesertadidik->nis = $req->get('nis');
            $kelolapesertadidik->nama_lengkap = $req->get('nama_lengkap');

        $kelolapesertadidik->save();

        $notification = array(
            'message' =>'Data User berhasil ditambahkan', 'alert-type' =>'success'
        );

        return redirect()->route('kelolapesertadidik')->with($notification);
    }

    public function getDataUser($id){

        $kelolapesertadidik = kelolapesertadidik::find($id);

        return response()->json($kelolapesertadidik);
    }

    public function edit(Request $req)
    {
        $kelolapesertadidik = kelolapesertadidik::find($req->get('id'));

        $kelolapesertadidik->jurusan = $req->get('jurusan');
        $kelolapesertadidik->no = $req->get('no');
        $kelolapesertadidik->tingkat = $req->get('tingkat');
        $kelolapesertadidik->kelas = $req->get('kelas');
        $kelolapesertadidik->nis = $req->get('nis');
        $kelolapesertadidik->nama_lengkap = $req->get('nama_lengkap');
        
        $kelolapesertadidik->save();

        $notification = array(
            'message' => 'Data User berhasil diubah',
            'alert-type' => 'success'
        );

        return redirect()->route('kelolapesertadidik')->with($notification);
    }


    public function hapus($id)
    {
        $kelolapesertadidik = kelolapesertadidik::find($id);

        $kelolapesertadidik->delete();

        $notification = array(
            'message' => 'Data User berhasil dihapus',
            'alert-type' => 'success'
        );

        return redirect()->route('kelolapesertadidik')->with($notification);
    }

}

