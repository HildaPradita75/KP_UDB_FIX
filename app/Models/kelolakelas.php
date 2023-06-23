<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelolakelas extends Model
{
    use HasFactory;

    public static function getDataUsers(){

        $kelolakelas = kelolakelas::all();

        $kelolakelas_filter = [];

        $no = 1;

        for($i = 0; $i < $kelolakelas->count(); $i++){
            $kelolakelas_filter[$i]['no'] = $no++ ;
            $kelolakelas_filter[$i]['jurusan'] = $kelolakelas[$i]->jurusan ;
            $kelolakelas_filter[$i]['kelas'] = $kelolakelas[$i]->kelas ;
            $kelolakelas_filter[$i]['tahun_pelajaran'] = $kelolakelas[$i]->tahun_pelajaran ;
            $kelolakelas_filter[$i]['wali_kelas'] = $kelolakelas[$i]->wali_kelas ;
        }

        return $kelolakelas_filter;
    }
}
