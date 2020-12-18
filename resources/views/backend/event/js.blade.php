  <!-- JAVASCRIPT -->
  <script>

var SITEURL = '{{URL::to('')}}';

    //CSRF TOKEN PADA HEADER
    //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    //jalankan function load_data diawal agar data ter-load
            load_data();

            //Iniliasi datepicker pada class input
            $('.input-daterange').datepicker({
                todayBtn: 'linked',
                format: 'yyyy-mm-dd',
                autoclose: true
            });

            $('#filter').click(function () {
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $('#table_event').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });

            $('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_event').DataTable().destroy();
                load_data();
            });



    //MULAI DATATABLE
    //script untuk memanggil data json dari server dan menampilkannya berupa datatable
    function load_data(from_date = '', to_date = '') {
        $('#table_event').DataTable({
            // "scrollY": "280px",
            // "scrollCollapse": true,
            processing :true,
        serverSide :true,
        ajax :{
            url:"{{ route('backend_event.index')}}",
            type:'GET',
            data:{from_date:from_date, to_date:to_date} //jangan lupa kirim parameter tanggal
        },
        columns:[
            {
            data:'id',
            name:'id',
            },
            {data: 'image',
             name: 'image',
            },
            {
            data:'name',
            name:'name',
            },
            {
            data:'date',
            name:'date'
            },
            {
            data:'description',
            name:'description'
            },
            {
            data:'action', name:'action', orderable: false
            },
        ],
        order:[[0,'asc']]
        });
        }
    });

     //TOMBOL TAMBAH DATA
    //jika tombol-tambah diklik maka
    $('#tombol-tambah').click(function () {
        $('#button-simpan').val("create-post"); //valuenya menjadi create-post
        $('#id').val(''); //valuenya menjadi kosong
        $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
        $('#modal-judul').html("Tambah Kategori Baru"); //valuenya tambah pegawai baru
        $('#tambah-edit-modal').modal('show'); //modal tampil
    });


    $('#form-tambah-edit').submit(function(evt) {
                evt.preventDefault();

                var formData = new FormData(this);

    //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
    // jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
    // jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data

                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');

                    console.log(formData);
                    $.ajax({
                        data:formData, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('backend_event.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        processData: false,
                        contentType: false,
                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_event').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('
                                success ')}}',
                                position: 'bottomRight'
                            });
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }

        })
    });

    //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID KE MODAL
    //ketika class edit-post yang ada pada tag body di klik maka
    $('body').on('click', '.edit-post', function () {
        var data_id = $(this).data('id');
        $.get('backend_event/' + data_id + '/edit', function (data) {
            $('#modal-judul').html("Edit Post");
            $('#tombol-simpan').val("edit-post");
            $('#tambah-edit-modal').modal('show');
            //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#description').val(data.description);
            $('#date').val(data.date);
            $('#image').val(data.image);
            $('#modal-preview').attr('alt', 'No image available');
            if(data.image){
            $('#modal-preview').attr('src', SITEURL +'../frontend/image/upload/event'+data.image);
            $('#hidden_image').attr('src', SITEURL +'../frontend/image/upload/event'+data.image);
            }
            })
        });

    //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
    $(document).on('click', '.delete', function () {
        dataId = $(this).attr('id');
        $('#konfirmasi-modal').modal('show');
    });

    //jika tombol hapus pada modal konfirmasi di klik maka
    $('#tombol-hapus').click(function () {
        $.ajax({

            url:"backend_event/" + dataId, //eksekusi ajax ke url ini
            type: 'delete',
            beforeSend: function () {
                $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
            },
            success: function (data) { //jika sukses
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                    var oTable = $('#table_event').dataTable();
                    oTable.fnDraw(false); //reset datatable
                });
                iziToast.warning({ //tampilkan izitoast warning
                    title: 'Data Berhasil Dihapus',
                    message: '{{ Session('
                    delete ')}}',
                    position: 'bottomRight'
                });
            }
        })
    });

</script>

<!-- JAVASCRIPT -->
