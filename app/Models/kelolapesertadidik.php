<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelolapesertadidik extends Model
{
    use HasFactory;

    public static function getDataUsers(){

        $kelolapesertadidik = kelolapesertadidik::all();

        $kelolapesertadidik_filter = [];

        $no = 1;

        for($i = 0; $i < $user->count(); $i++){
            $kelolapesertadidik_filter[$i]['no'] = $no++ ;
            $kelolapesertadidik_filter[$i]['nis'] = $kelolapesertadidik[$i]->nis ;
            $kelolapesertadidik_filter[$i]['nama_pesertadidik'] = $kelolapesertadidik[$i]->nama_pesertadidik ;
            $kelolapesertadidik_filter[$i]['jenis_kelamin'] = $kelolapesertadidik[$i]->jenis_kelamin ;

        }

        return $kelolapesertadidik_filter;
    }
}
