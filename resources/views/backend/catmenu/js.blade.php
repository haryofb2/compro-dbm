  <!-- JAVASCRIPT -->
  <script>
    //CSRF TOKEN PADA HEADER
    //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    load_data();

            //Iniliasi datepicker pada class input
            // $('.input-daterange').datepicker({
            //     todayBtn: 'linked',
            //     format: 'yyyy-mm-dd',
            //     autoclose: true
            // });

            // $('#filter').click(function () {
            //     var from_date = $('#from_date').val();
            //     var to_date = $('#to_date').val();
            //     if (from_date != '' && to_date != '') {
            //         $('#table_info').DataTable().destroy();
            //         load_data(from_date, to_date);
            //     } else {
            //         alert('Both Date is required');
            //     }
            // });

            // $('#refresh').click(function () {
            //     $('#from_date').val('');
            //     $('#to_date').val('');
            //     $('#table_info').DataTable().destroy();
            //     load_data();
            // });

    //MULAI DATATABLE
    //script untuk memanggil data json dari server dan menampilkannya berupa datatable
    function load_data(from_date = '', to_date = '') {
        $('#table_info').DataTable({
            // "scrollY": "280px",
            // "scrollCollapse": true,
            "pagingType": "first_last_numbers",
            processing :true,
        serverSide :true,
        ajax :{
            url:"{{route('category_menu.index')}}",
            type:'GET'
        },
        columns:[
            {
            data:'id',
            name:'id'
            },
            // {data: 'image',
            //  name: 'image',
            // },
            {
            data:'name',
            name:'name'
            },
            // {
            // data:'cabang.name',
            // name:'cabang'
            // },
            // {
            // data:'description',
            // name:'description'
            // },
            // {
            // data:'created_at',
            // name:'created_at'
            // },
            // {
            // data:'updated_at',
            // name:'updated_at'
            // },

            {
            data:'action',
            name:'action'
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
    //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
    //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
    //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
    $('#form-tambah-edit').submit(function(evt) {
                evt.preventDefault();

                var formData = new FormData(this);
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');
                    $.ajax({
                        data:formData,
                            // .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('category_menu.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        processData: false,
                        contentType: false,
                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_info').dataTable(); //inialisasi datatable
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
        $.get('category_menu/' + data_id + '/edit', function (data) {
            $('#modal-judul').html("Edit Post");
            $('#tombol-simpan').val("edit-post");
            $('#tambah-edit-modal').modal('show');
                // console.log(data.position.name);
            //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
            $('#id').val(data.id);
            $('#name').val(data.name);
            // $('#cabang_id').val(data.cabang.id);
            // $('#image').val(data.image);
            // $('#description').val(data.description);

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

            url: "category_menu/" + dataId, //eksekusi ajax ke url ini
            type: 'delete',
            beforeSend: function () {
                $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
            },
            success: function (data) { //jika sukses
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                    var oTable = $('#table_info').dataTable();
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
