@extends('frontend.master')


@section('content')
<style type="text/css">

   </style>
 <section id="event">
        <div class="container">
            <h1 class="display-4">event DBM</h1>
        </div>
</section>

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
                  '<div class="card shadow'+row.cabang_id+'" style="height:550px">'+
                                        '  <img src="../../frontend/img/upload/info/'+row.image+'" class="card-img-top" style="height:225px">'+
                                        '  <div class="card-body" style="height:200px">'+
                  '    <div class="card-title"><h2 style=" text-align: center;">'+row.name+'</h2></div>'+
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
    $('#table_event tbody').addClass('row');
    $('#table_event tbody tr').addClass('col-lg-4 col-md-6 col-sm-12');
   });
    });
</script>

 @endsection
