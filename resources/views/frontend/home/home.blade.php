@extends('frontend.master')

@section('content')

<style>
    .container-fluid.main{
  position: relative; /* To make the navbar positions relative to this container */
  padding: 0;
}


.carousel .background {
  background-position: center center;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  /* max-width: auto; */
  height: 1100px;
}

@media (max-width:991px) {
  .carousel .background {
    background-size: cover; /* To make the background image looks good */
  }
}

.carousel .background.a {
  background-image: url("../frontend/img/WhatsApp Image 2020-12-15 at 7.54.13 AM.jpeg");
}

.carousel .background.b {
  background-image: url("../frontend/img/DJI_0360.jpg");
}

.carousel .background.c {
  background-image: url("../frontend/img/DJI_0328.jpg");
}

.carousel .background.d {
  background-image: url("../frontend/img/DJI_0325.jpg");
}

.carousel .background.e {
  background-image:  url("../frontend/img/DJI_0026.jpg");
}



.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition: opacity 2s; /* The 0.5s describes the duration to make the opacity from 0 to 1 */
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

/* CSS Hack to trigger GPU for smooth transition */
@media all and (transform-3d),
(-webkit-transform-3d) {
  .carousel-fade .carousel-inner > .item.next,
  .carousel-fade .carousel-inner > .item.active.right {
    opacity: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-fade .carousel-inner > .item.prev,
  .carousel-fade .carousel-inner > .item.active.left {
    opacity: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-fade .carousel-inner > .item.next.left,
  .carousel-fade .carousel-inner > .item.prev.right,
  .carousel-fade .carousel-inner > .item.active {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
/* CSS Hack to trigger GPU for smooth transition */




</style>
<section id="hero" >
    <div class="container-fluid main">
        <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner" role="listbox">
                <div class="item active background a"></div>
                <div class="item background b"></div>
                <div class="item background c"></div>
                <div class="item background d"></div>
                <div class="item background e"></div>

            </div>
        </div>

        <div class="covertext">
            <div class="col-lg-12" style="float:none; margin:0 auto;">
                <h1 class="title">DJAVA BERKAH MINERAL</h1>
                <h3 class="subtitle">{{ __('home.motto') }}</h3>
            {{-- <a href="#layanan">
                    <div class="icon-scroll">
                    </div>
                </a> --}}
            </div>
        </div>
        {{-- <a href="#" ><i class="fa-chevron-up"></i></a> --}}

    </div>
</section>
<section id="layanan">
    <div class="jumbotron1 jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ __('home.service') }}</h1>
                <div class="col-lg-6 content order-lg-1 order-2">
                    <div class="card1 card" >
                        <a href="{{ route ('service') }}/#drilling">
                        <img src="../frontend/img/icon4.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="title1 card-title">DRILLING</h4>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <a href="#"> --}}
                <div class="col-lg-6 content order-lg-1 order-2">
                    <div class="card1 card" >
                        <a href="{{ route ('service') }}/#mining">
                            <img src="../frontend/img/icon3.png" alt="Card image" style="width:100%">
                        {{-- <hr style="color: white;height:10px"> --}}
                            <div class="card-body">
                                <h4 class="title1 card-title">MINING</h4>
                            </div>
                        </a>
                    </div>
                {{-- </a> --}}
                </div>
                <div class="col-lg-6 content order-lg-1 order-2">
                    <div class="card1 card" >
                        <a href="{{ route ('service') }}/#construction">
                            <img src="../frontend/img/icon2.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="title1 card-title">CONSTRUCTION</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 content order-lg-1 order-2">
                    <div class="card1 card" >
                        <a href="{{ route ('service') }}/#shipping">
                            <img src="../frontend/img/icon1.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="title1 card-title">SHIPPING</h4>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</section>
<section id="partner">
    <div class="jumbotron1 jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ __('home.partner') }}</h1>
            @foreach ($partner as $p)
            <div class="col-lg-3 content order-lg-1 order-2">
                <img src="../frontend/img/upload/partner/{{$p->image}}">
            </div>
            @endforeach
        </div>
    </div>
</section>
</section>
<script>
    $('.carousel').carousel({
    pause: "false" /* Change to true to make it paused when your mouse cursor enter the background */
});
</script>

  @endsection
