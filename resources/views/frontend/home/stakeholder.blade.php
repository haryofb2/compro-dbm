@extends('frontend.master')

@section('content')

<section id="team">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">STAKEHOLDER OF DBM</h1>
          <div class="col-lg-6 content order-lg-1 order-2">
          </div>
          {{-- <div class="col-lg-6 content order-lg-1 order-2">
          <p class="lead">Menjadi Perusahaan Nasional yang Mengembangkan Penggunaan Aspek Sumber Daya Lokal Dengan Proses Pengembangan yang Berkesinambungan.</p>
          </div> --}}
        </div>
      </div>

        <div class="container">

            {{-- <div class="col-lg-4 col-md-6"> --}}
                <div class="member1">
                    <div class="pic"><img src="/frontend/img/upload/employee/{{$dir->image}}" alt="" class="img-responsive img-thumbnail"></div>
                    {{-- @foreach ($dir as $dir) --}}
                    <h4>{{$dir->name}}</h4>
                    <span>{{$dir->position->name}} of {{$dir->divition->name}}</span>
                    <br>
                    <p class="quote">{{$dir->quote}}</p>
                    {{-- @endforeach --}}
                </div>
            {{-- </div> --}}
                {{-- </div> --}}
                <div class="row">
                    @foreach ($emp as $emp)
                    <div class=" card testimonial-card col-lg-4 col-md-6" style="border:none; !important">
                        <div class="member">
                        <div class="pic"><img src="/frontend/img/upload/employee/{{$emp->image}}" alt="" class="img-responsive img-thumbnail"></div>
                            <div class="card-body">
                            <h4>{{$emp->name}}</h4>
                            <span>{{$emp->position->name}} of {{$emp->divition->name}}</span>
                            <br>
                            <p class="quote">{{$emp->quote}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
  </section><!-- #team -->

  @endsection
