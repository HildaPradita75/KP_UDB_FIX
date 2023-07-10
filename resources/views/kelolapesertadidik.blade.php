@extends('adminlte::page')

@section('title', 'admin')

@section('content_header')
    <h1 class="m-0 text-dark" style="text-align: center;">SELAMAT DATANG DI MENU</h1>
    <h1 class="m-0 text-dark" style="text-align: center;">KELOLA PESERTA DIDIK </h1>
    @stop

@section('content')

<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
            <div class="btn-group mb-3">
            <div class="navbar-menu-wrappr d-flex align-item-center justify-content-between mb-3">
                <p class="mb-0"></p>
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                    </button>
                </div>
            </div>
            </div>  
                    <!-- TEST -->
                <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tingkat</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($d as $kelolapesertadidiks)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kelolapesertadidiks->id}}</td>
                        <td>{{$kelolapesertadidiks->jurusan}}</td>
                        <td>{{$kelolapesertadidiks->kelas}}</td>
                        <td>{{$kelolapesertadidiks->nis}}</td>
                        <td>{{$kelolapesertadidiks->nama_lengkap}}</td>
                        <td>
                            <div class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded" data-id="{{ $kelolapesertadidiks->id }}" id="btn-edit-user" data-bs-toggle="modal" data-bs-target="#editModal">
                                    Edit
                                </button>
                                <a class="btn btn-sm btn-danger btn-rounded" href="admin/kelolakelas/delete/{{$kelolapesertadidiks->id}}">Hapus</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="{{ route('tambahh')}}" enctype="multipart/form-date">
            @csrf
            
            <div class="d-flex justify-content-between mb-1">
                <p>Tingkat</p>
                <input type="num" placeholder="Tingkat" name="tingkat">        
            </div>
            <div class="d-flex justify-content-between mb-1">
                <p>Jurusan</p>
                <input type="text" placeholder="Jurusan" name="jurusan">        
            </div>
            <div class="d-flex justify-content-between mb-1">
                <p>Kelas</p>
                <input type="text" placeholder="Kelas" name="kelas">        
            </div>
            <div class="d-flex justify-content-between mb-1">
                <p>NIS</p>
                <input type="text" placeholder="NIS" name="nis">        
            </div>
            <div class="d-flex justify-content-between mb-1">
                <p>Nama Lengkap</p>
                <input type="text" placeholder="Lengkap" name="nama_lengkap">        
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah 
                    </button>
                    <!-- <p>a</p> -->
                </div>
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
                         $('#edit-tingkat').val(res.tingkat);
                         $('#edit-jurusan').val(res.jurusan);
                         $('#edit-kelas').val(res.kelas);
                         $('#edit-nis').val(res.nis);
                         $('#edit-nama_lengkap').val(res.nama_lengkap);
                    },
               });
          });
     });
</script>
@endsection