@extends('backend.master')

@section('content')
    <div class="container" style="padding: 30px;">
        <div class="card">
            <div class="card-header">
              <h3 class="text-center">MASTER CABANG</h3>
            </div>
            <div class="card-body">
                  <!-- MULAI TOMBOL TAMBAH -->
                  <a href="javascript:void(0)" class="btn btn-info" id="tombol-tambah">Tambah Master</a>
                  <br><br>
                  <!-- AKHIR TOMBOL -->
                <table class="table table-striped table-bordered " id="table_cabang">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

      <!-- MULAI MODAL FORM TAMBAH/EDIT-->
      <div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-judul"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">

                                <input type="hidden" name="id" id="id">

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                    value="create">Simpan
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->

    <!-- MULAI MODAL KONFIRMASI DELETE-->

    <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PERHATIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Jika menghapus data ini maka</b></p>
                    <p>*data kategori tersebut hilang selamanya, apakah anda yakin?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                        Data</button>
                </div>
            </div>
        </div>
    </div>

    <!-- AKHIR MODAL -->

@endsection

@section('content-js')
{{-- <script type="text/javascript">
$(document).ready(function() {
    $('#category_picture').DataTable({
        processing :true,
        serverSide :true,
        ajax :{
            url:"{{ route('backend.category.picture.home')}}",
            type:'GET'
        },
        columns:[
            {data:'id',name:'id'},
            {data:'name',name:'name'},
            {data:'action',name:'action'},
        ],
        order:[[0,'asc']]
    });
} );
</script> --}}

@include('backend.cabang.js')

@endsection
