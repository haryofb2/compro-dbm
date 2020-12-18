@extends('frontend.master')

@section('content')

{{-- <link rel="stylesheet" href="../backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
<link rel="stylesheet" href="../backend/plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
<link rel="stylesheet" href="../backend/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<section class="content" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary" style="padding: 100px;">

            <div class="card-body">
              <div>

                <div class="btn-group w-100 mb-2">
                  <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                  @foreach ($pic as $pic)
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="{{$pic->category_id}}">{{$pic->cat_pictuure->name}} </a>
                  @endforeach
                </div>
                <div class="mb-2">
                  <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                  <div class="float-right">
                    <select class="custom-select" style="width: auto;" data-sortOrder>
                      <option value="index"> Sort by Position </option>
                      <option value="sortData"> Sort by Custom Data </option>
                    </select>
                    <div class="btn-group">
                      <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                      <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="filter-container p-0 row">
                    @foreach ($pic as $pic)
                    <div class="filtr-item col-sm-2" data-category="{{$pic->category_id}}" data-sort="white sample">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="{{$pic->name}}">
                        <img src="{{$pic->name}}" class="img-fluid mb-2" alt="white sample"/>
                        </a>
                    </div>
                     @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <script src="../backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../backend/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="../backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../backend/dist/js/demo.js"></script>
<!-- Filterizr-->
<script src="../backend/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script> --}}


<section id="gallery">
    {{-- <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">galery</h3>
      </div>
      <div class="row">

        <div class="col-lg-12" style="padding-top: 20px !important">
          <ul id="portfolio-flters">
            <li data-filter=".1, .2, .3, .4" class="filter-active">All</li>
            @foreach ($cat as $cat)
            <li data-filter=".{{$cat->id}}">{{$cat->name}}</li>
            @endforeach
        </ul>
        </div>
      </div> --}}

    <div class="jumbotron1 jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">statistic of dbm</h1>
          <div class="col-lg-6 content order-lg-1 order-2">
          </div>
          {{-- <div class="col-lg-6 content order-lg-1 order-2">
          <p class="lead">Menjadi Perusahaan Nasional yang Mengembangkan Penggunaan Aspek Sumber Daya Lokal Dengan Proses Pengembangan yang Berkesinambungan.</p>
          </div> --}}
        </div>
    </div>

      <div class="row" id="portfolio-wrapper">
          @foreach ($pic as $pic)
        <div class="col-lg-3 col-md-6 portfolio-item {{$pic->category_id}}">
                <a href="../frontend/img/{{$pic->name}}">
                <img src="../frontend/img/{{$pic->name}}" alt="" >
                <div class="details">
                    <h4>{{$pic->name}}</h4>
                    <span> {{$pic->catpicture->name}}</span>
                    {{-- <span>Alored dono par</span> --}}
                </div>
                </a>
            </div>
            @endforeach

        </div>

    </div>
  </section>
  <!-- #portfolio -->
    {{-- {{-- tes --}}
  @endsection
