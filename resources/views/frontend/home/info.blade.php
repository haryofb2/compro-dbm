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

    <div class="jumbotron1 jumbotron-fluid">
        {{-- <div class="row"> --}}
            <div class="container">
                <h1 class="display-4">INFO DBM</h1>
                {{-- <div class="col-lg-6 content order-lg-1 order-2">
                    <img src="../frontend/img/Untitled.jpg" alt="">
                </div>
            </div> --}}
        </div>
    </div>

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
            {{-- <div class="row">
                @foreach ($info as $info)

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card mb-3">
                        <img class="card-img-top" src="/frontend/img/portfolio/app1.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title" style="text-align:center;">{{$info->name}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach

        </div> --}}
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
</section>
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
                  '<div class="card shadow'+row.cabang_id+'" style="height:500px">'+
                                        '  <img src="../../frontend/img/upload/info/'+row.image+'" class="card-img-top" style="height:225px">'+
                                        '  <div class="card-body" style="height:200px">'+
                  '    <div class="card-title"><h1 style=" text-align: center;">'+row.name+'</h1></div>'+
                  '    <div class="card-title"><h4 style=" text-align: center;">'+row.created_at+'</h4></div>'+
                  '    <div class="card-text"><h4 style=" text-align: justify;">'+row.description.substring(1, 100)+
                    '...  <br><br><br><a class="btn btn-common"style="background:#fff;color:green;padding:6px 30px 6px 30px;border-color:green;margin-left:110px;border-radius:20px;"href="#">Detail</a></h4></div>'+
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


