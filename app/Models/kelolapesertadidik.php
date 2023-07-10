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
            $kelolapesertadidik_filter[$i]['tingkat'] = $kelolapesertadidik[$i]->tingkat ;
            $kelolapesertadidik_filter[$i]['jurusan'] = $kelolapesertadidik[$i]->jurusan ;
            $kelolapesertadidik_filter[$i]['kelas'] = $kelolapesertadidik[$i]->kelas ;
            $kelolapesertadidik_filter[$i]['nis'] = $kelolapesertadidik[$i]->nis ;
            $kelolapesertadidik_filter[$i]['nama_lengkap'] = $kelolapesertadidik[$i]->nama_lengkap ;

        }

        return $kelolapesertadidik_filter;
    }
}
