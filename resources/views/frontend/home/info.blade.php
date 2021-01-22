@extends('frontend.master')

@section('content')
<style type="text/css">
    #info.dataTable.no-footer{
       border-bottom: unset;
     }
     #info tbody td {
         display: block;
         border: unset;
     }
     #info>tbody>tr>td{
       border-top: unset;
     }
   </style>
 <section id="info">

        {{-- <div class="row"> --}}
            <div class="container">
                <h1 class="display-4">INFO DBM</h1>
            </div>
        </section>


    <div class="container wow fadeIn" >
        <div class="col-lg-12" >
            <ul id="info-flters">
              <li data-filter=".1, .2, .3, .4" class="filter-active">All</li>
                @foreach ($cabang as $cabang)
                   <li data-filter=".{{$cabang->id}},.0">{{$cabang->name}}</li>
                @endforeach
             </ul>
         </div>
    </div>
        <div class="container py-4">

            <div class="row">


              <div class="col-12">

                <table id="table_info" class="table w-100">
                  <thead>
                    <tr>
                      <th>nama</th>
                      <th>description</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
<!-- #services -->

 @endsection

 @section('content-js')

 <script type="text/javascript">

    $(document).ready(function() {
            $("#table_info thead").hide();
    var dt = $('#table_info').DataTable({
        ajax :{
        url:"{{ route('info.index')}}",
        type:'GET'
    },
            bInfo: false,
     pageLength: 9,
   lengthChange: false,
    deferRender: true,
     processing: true,
     language: {
          paginate: {
              previous: "<",
              next: ">"
          },
        },
        columns: [
            {
                render: function (data, type, row, meta) {
                  var html =
                  '<div class="card shadow'+row.cabang_id+'" style="height:550px">'+
                                        '  <img src="../../frontend/img/upload/info/'+row.image+'" class="card-img-top" style="height:225px">'+
                                        '  <div class="card-body" style="height:200px">'+
                  '    <div class="card-title"><h2 style=" text-align: center;">'+row.name+'</h2></div>'+
                  '    <div class="card-title"><h6 style=" text-align: center;">'+row.created_at+'</h6></div>'+
                  '    <div class="card-text"><p style=" text-align: justify;">'+row.description.substring(1, 100)+
                    '...  <br><br><br><a class="btn btn-common"style="background:#fff;color:green;padding:6px 30px 6px 30px;border-color:green;margin-left:90px;border-radius:20px;"href="#">Detail</a></hp></div>'+
                                        '  </div>'+
                                        '</div>';
                  return html;
                }
            },
            {
              data :"name", visible: false
            }
        ]
    });

   dt.on('draw', function(data){
    $('#table_info tbody').addClass('row');
    $('#table_info tbody tr').addClass('col-lg-4 col-md-6 col-sm-12');
   });
    });
</script>

 @endsection


