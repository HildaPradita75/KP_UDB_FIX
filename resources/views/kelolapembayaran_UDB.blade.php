@extends('adminlte::page')

@section('title', 'admin')

@section('content_header')
    <h1 class="m-0 text-dark" style="text-align: center;">SELAMAT DATANG DI MENU</h1>
    <h1 class="m-0 text-dark" style="text-align: center;">KELOLA PEMBAYARAN</h1>
    @stop

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
            <div class="btn-group mb-3">
            <!-- <div class="navbar-menu-wrappr d-flex align-item-center justify-content-between mb-3"> -->
                <!-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Tingkat
                </button> -->
                <select name="users_id" class="form-select" aria-label="Default select example" id="selectuser">
                    <option selected>Pilih Tingkat</option>
                    @foreach($kelolakelas as $key => $value)
                        <option value="{{ $value->id}}" id="getname" >{{ $value->kelas}}</option>
                     @endforeach
                </select>
                <ul class="dropdown-menu">
                </ul>
                </div>
                <div class="btn-group mb-3">
                <select name="users_id" class="form-select" aria-label="Default select example" id="selectuser">
                    <option selected>Pilih Jurusan</option>
                    @foreach($kelolakelas as $key => $value)
                        <option value="{{ $value->id}}" id="getname" >{{ $value->jurusan}}</option>
                     @endforeach
                </select>
                <select name="users_id" class="form-select" aria-label="Default select example" id="selectuser">
                    <option selected>Pilih Kelas</option>
                    @foreach($kelolakelas as $key => $value)
                        <option value="{{ $value->id}}" id="getname" >{{ $value->kelas}}</option>
                     @endforeach
                </select>
                <div class="div">
                    <button type="button" class="btn btn-primary ml-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Terapkan
                    </button>
                </div>
                <ul class="dropdown-menu">
                    ...
                </ul>
                </div>    


                    
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Sisa Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>5520120053</td>
                        <td>Hilda Pradita</td>
                        <td>Rp. 2.000.000</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#LihatData">
                            Bayar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>    
    </div>
</div>    


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-between mb-1">
            <p>Kelas</p>
            <input type="text" placeholder="Kelas">        
        </div>
        <div class="d-flex justify-content-between mb-1">
            <p>Jumlah Peserta Didik</p>
            <input type="num" placeholder="Jumlah Peserta Didik">        
        </div>
        <div class="d-flex justify-content-between mb-1">
            <p>Jurusan</p>
            <input type="text" placeholder="Jurusan">        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade " id="LihatData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="navbar-menu-wrappr d-flex align-item-center justify-content-between mb-3">
                <p class="mb-0"></p>
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                    </button>
                </div>
            </div>
                    
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Sisa Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>5520120053</td>
                        <td>Hilda Pradita</td>
                        <td>Rp. 2.000.000</td>
                        <td>
                            <button class="btn btn-warning">Lihat</button>
                        </td>
                    </tr>
                </tbody>
            </table>
      </div>
    </div>
  </div>
</div>
@stop