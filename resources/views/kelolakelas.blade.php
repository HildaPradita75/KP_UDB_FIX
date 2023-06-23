@extends('adminlte::page')

@section('title', 'admin')

@section('content_header')
    <h1 class="m-0 text-dark" style="text-align: center;">SELAMAT DATANG DI MENU</h1>
    <h1 class="m-0 text-dark" style="text-align: center;">KELOLA KELAS</h1>
    @stop

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
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
                        <th>Id Kelas</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Sub Kelas</th>
                        <th>Tahun Pelajaran</th>
                        <th>Wali Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($kelolakelas as $kelolakelass)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kelolakelass->id}}</td>
                        <td>{{$kelolakelass->jurusan}}</td>
                        <td>{{$kelolakelass->kelas}}</td>
                        <td>{{$kelolakelass->sub_kelas}}</td>
                        <td>{{$kelolakelass->tahun_pelajaran}}</td>
                        <td>{{$kelolakelass->wali_kelas}}</td>
                        <td>
                            <div class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded" data-id="{{ $kelolakelass->id }}" id="btn-edit-user" data-bs-toggle="modal" data-bs-target="#editModal">
                                    Edit
                                </button>
                                <a class="btn btn-sm btn-danger btn-rounded" href="admin/kelolakelas/delete/{{$kelolakelass->id}}">Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>    
    </div>
</div>    


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleMod alLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">TAMBAH KELAS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="forms-sample" method="post" action="{{ route('tambah')}}" enctype="multipart/form-date">
            @csrf
            <!-- <div class="form-group d-flex justify-content-between mb-1">
                <label for="exampleInputUsername1">ID Kelas</label>
                <input type="text" placeholder="ID Kelas" class="form-control rounded" id="id" name="id" >        
            </div> -->
            <div class="form-group d-flex justify-content-between mb-1">
                <label for="exampleInputUsername1">Jurusan</label>
                <input type="text" placeholder="Jurusan" class="form-control rounded" id="jurusan" name="jurusan" >        
            </div>
            <div class="d-flex justify-content-between mb-1">
                <label for="exampleInputUsername1">Kelas</label>
                <input type="text" placeholder="Kelas" class="form-control rounded" id="kelas" name="kelas" >        
            </div>
            <div class="d-flex justify-content-between mb-1">
                <label for="exampleInputUsername1">Sub Kelas</label>
                <input type="text" placeholder="Sub Kelas" class="form-control rounded" id="sub_kelas" name="sub_kelas" >        
            </div>
            <div class="d-flex justify-content-between mb-1">
                <label for="exampleInputUsername1">Tahun Pelajaran</label>
                <input type="text" placeholder="Tahun Pelajaran" class="form-control rounded" id="tahun_pelajaran" name="tahun_pelajaran" >        
            </div>
            <div class="d-flex justify-content-between mb-1">
                <label for="exampleInputUsername1">Wali Kelas</label>
                <input type="text" placeholder="Wali Kelas" class="form-control rounded" id="wali_kelas" name="wali_kelas" >        
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Petugas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <form method="post" action="{{ route('kelolakelas.ubah')}}" enctype="multipart/form-data">
                         @method ('PATCH')
                         @csrf
                         <div class="form-group">
                              <label for="id">ID</label>
                              <input type="text" class="form-control rounded" id="edit-id" name="id" placeholder="Id">
                         </div>
                         <div class="form-group">
                              <label for="jurusan">jurusan</label>
                              <input type="text" class="form-control rounded" id="edit-jurusan" name="jurusan" placeholder="jurusan">
                         </div>
                         <div class="form-group">
                              <label for="kelas">kelas</label>
                              <input type="text" class="form-control rounded" id="edit-kelas" name="kelas" placeholder="kelas">
                         </div>
                         <div class="form-group">
                              <label for="kelas">Sub Kelas</label>
                              <input type="text" class="form-control rounded" id="edit-sub_kelas" name="sub_kelas" placeholder="sub_kelas">
                         </div>
                         <div class="form-group">
                              <label for="tahun_pelajaran">tahun ajaran</label>
                              <input type="tahun_pelajaran" class="form-control rounded" id="edit-tahun_pelajaran" name="tahun_pelajaran" placeholder="tahun_pelajaran">
                         </div>
                         <div class="form-group">
                              <label for="walikelas">walikelas</label>
                              <input type="text" class="form-control rounded" id="edit-wali_kelas" name="wali_kelas" placeholder="walikelas">
                         </div>
                         <div class="modal-footer justify-content-center">
                              <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-primary btn-rounded">Simpan</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>

<div class="modal fade " id="LihatData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">TAMBAH KELAS</h1>
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
                        <th>Kelas</th>
                        <th>Jumlah Pesrta Didik</th>
                        <th>Program Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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

@section('js')
<script>
     $(function(){
          $(document).on('click','#btn-edit-user', function(){

               let id = $(this).data('id');

               $.ajax({
                    type: "get",
                    url: "{{url('/admin/ajaxadmin/dataUser')}}/"+id,
                    dataType: 'json',
                    success: function(res){
                         $('#edit-id').val(res.id);
                         $('#edit-jurusan').val(res.jurusan);
                         $('#edit-kelas').val(res.kelas);
                         $('#edit-sub_kelas').val(res.sub_kelas);
                         $('#edit-tahun_pelajaran').val(res.tahun_pelajaran);
                         $('#edit-wali_kelas').val(res.wali_kelas);
                    },
               });
          });
     });
</script>
@endsection