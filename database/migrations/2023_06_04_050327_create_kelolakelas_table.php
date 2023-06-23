<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelolakelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelolakelas', function (Blueprint $table) {
            $table->id();
            $table->string('jurusan');
            $table->string('kelas');
            $table->string('sub_kelas');
            $table->string('tahun_pelajaran');
            $table->string('wali_kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelolakelas');
    }
}
