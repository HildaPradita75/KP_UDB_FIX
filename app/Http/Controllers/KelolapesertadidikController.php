<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelolapesertadidik;

class KelolapesertadidikController extends Controller
{
    public function index()
    {
        $kelolapesertadidik = kelolapesertadidik::All();

        return view('kelolapesertadidik', compact('kelolapesertadidik'));
    }
    public function store(Request $req)
    {
        $kelolapesertadidik = new kelolapesertadidik;

            $kelolapesertadidik->nis = $req->get('nis');
            $kelolapesertadidik->nama_pesertadidik = $req->get('nama_pesertadidik');
            $kelolapesertadidik->jenis_kelamin = $req->get('jenis_kelamin');

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

        $kelolapesertadidik->nis = $req->get('nis');
        $kelolapesertadidik->nama_pesertadidik = $req->get('nama_pesertadidik');
        $kelolapesertadidik->jenis_kelamin = $req->get('jenis_kelamin');
        
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

