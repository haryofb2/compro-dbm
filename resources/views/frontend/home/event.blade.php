@extends('frontend.master')


@section('content')
<style type="text/css">

   </style>
 <section id="event">
    <div class="jumbotron1 jumbotron-fluid">
        {{-- <div class="row"> --}}
            <div class="container">
                <h1 class="display-4">event DBM</h1>
                {{-- <div class="col-lg-6 content order-lg-1 order-2">
                    <img src="../frontend/img/Untitled.jpg" alt="">
                </div>
            </div> --}}
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

                <table id="table_event" class="table w-100">
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
            $("#table_event thead").hide();
    var dt = $('#table_event').DataTable({
        ajax :{
        url:"{{ route('event')}}",
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
                  '<div class="card shadow'+row.cabang_id+'">'+
                                        '  <img src="../../frontend/img/upload/event/'+row.image+'" class="card-img-top" style="height:225px">'+
                                        '  <div class="card-body" style="height:300px">'+
                  '    <div class="card-text"><h1 style=" text-align: center;">'+row.name+'</h1></div>'+
                  '    <div class="card-text"><h4 style=" text-align: justify;">'+row.description.substring(0, 300)+'...  <a href="#">Readmore</a></h4></div>'+
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
    $('#table_event tbody').addClass('row');
    $('#table_event tbody tr').addClass('col-lg-4 col-md-6 col-sm-12');
   });
    });
</script>

 @endsection
