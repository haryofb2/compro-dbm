@extends('backend.master')

@section('content')
    <div class="container" style="padding: 30px">
        <div class="card">
            <div class="card-header">
              <h3 class="text-center">MASTER EVENT</h3>
            </div>
            <div class="card-body" >
                <!-- MULAI DATE RANGE PICKER -->
                <div class="row input-daterange">
                    <div class="col-md-4">
                        <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date"
                            readonly />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date"
                            readonly />
                    </div>
                    <div class="col-md-4">
                        <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                        <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                    </div>
                </div>
                <!-- AKHIR DATE RANGE PICKER -->
                <br>
                  <!-- MULAI TOMBOL TAMBAH -->
                  <a href="javascript:void(0)" class="btn btn-info" id="tombol-tambah">Tambah Event</a>
                  <br><br>
                  <!-- AKHIR TOMBOL -->
                <table class="table table-striped table-bordered " id="table_event" >
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Nama</th>
                            <th>Date</th>
                            <th>Description</th>
                            {{-- <th>image</th> --}}
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
                    <form id="form-tambah-edit" enctype="multipart/form-data" name="form-tambah-edit" class="form-horizontal">
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
                                <div class="form-group">
                                    <label for="date" class="col-sm-12 control-label">Date</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="date" name="date"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-12 control-label">Description</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="description" name="description"
                                                value="">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Image</label>
                                        <div class="col-sm-12">
                                            <input id="image" type="file" name="image" >
                                            {{-- <input type="hidden" name="hidden_image" id="hidden_image"> --}}
                                        </div>
                                </div>
                            {{-- <img id="modal-preview" src="https://via.placeholder.com/150" alt="Preview" class="form-group hidden" width="100" height="100"> --}}
                            </div>
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" name="submit" class="btn btn-primary btn-block" id="tombol-simpan"
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
                    <p>*data tersebut hilang selamanya, apakah anda yakin?</p>
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

@include('backend.event.js')
@endsection
