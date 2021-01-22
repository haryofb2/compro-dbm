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
  height: 90vh;
}

@media (max-width:1024px) {
  .carousel .background {
    background-size: cover; /* To make the background image looks good */
    /* height: 90vh; */
  }
}

.carousel .background.a {
  background-image: url("../frontend/img/DBM_background.png");
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
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  position: relative;
}
/* #header{
    height:70px !important;
    padding:10px !important;
} */
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition: opacity 2s; /* The 0.5s describes the duration to make the opacity from 0 to 1 */
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}
@media (max-width: 1024px) {
.carousel-caption {
    top:15%;
   z-index:99;
   height: 100vw;
}
.lead{
    /* font-size:3vw; */
}
.carousel-caption img{
    max-height: 30vw;
    max-width: 100%;
}

#layanan{
    height: 100%;
}
.carousel-inner {
    height: 100%;
}
#layanan .carousel-caption .display-4{
    /* font-size: 3vw; */
    margin-top: 3vw;
}
.carousel-caption .lead{
    /* font-size: 3vw; */
}
.carousel-item {
  height: 100vw !important;
}
}
@media (min-width: 1024px) {
.carousel-caption {
    top:25%;
   z-index:99;
}

}
@media (max-width: 768px){
    #hero,
    #hero .container-fluid.main,
    #hero .carousel {
    height: 150vw;
}
}
p{
    text-align:justify;
}
h3 {
     /* font-weight: bold; */
     color: rgba(45, 243, 144) !important;
    text-align:left;
    text-transform: uppercase
    /*-webkit-text-stroke: 1px black;*/
    /*position:absolute;*/



}
.carousel-item {
  height: 75vh !important;
}
}


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
div.transbox {
    z-index:9;
      background: rgba(0, 0, 0, 0.5);
    /*opacity: 0.4;*/
    width:100%;
    height:100%;
    /*padding:50px;*/
    position: absolute;
    /*filter: alpha(opacity=20);*/
}




</style>
<section id="hero" >
    <div class="container-fluid main">
        <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner" role="listbox">
                <div class="item active background a"></div>
                {{-- <div class="item background b"></div>
                <div class="item background c"></div>
                <div class="item background d"></div>
                <div class="item background e"></div> --}}

            </div>
        </div>

        <div class="covertext">
                {{-- <h1 class="title">DJAVA BERKAH MINERAL</h1> --}}
                <h6 class="subtitle">{{ __('home.motto') }}</h5>
            {{-- <a href="#layanan">
                    <div class="icon-scroll">
                    </div>
                </a> --}}
        </div>
        {{-- <a href="#" ><i class="fa-chevron-up"></i></a> --}}

    </div>
</section>
<section id="motto">
    <div class="container-fluid">
        <h6>{{ __('home.motto') }}</h6>
    </div>
</section>
<br>

    <section id="tentang">
        <div class="container">
            <h1>{{ __('header.about.about') }}</h1>
            <hr>
            <p>{{ __('about.about1') }}</p>
            <div class="more">
                <a href="{{ route ('about') }}">{{ __('home.more') }}</a>
            </div>
        </div>


    </section>

<br>
<section id="layanan">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

        </ol>

        <h1>{{ __('home.service') }}</h1>


        <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('../frontend/img/DJI_0360.jpg')">
                <div class="transbox"></div>

                <div class="carousel-caption">
                    <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="../frontend/img/WhatsApp Image 2021-01-18 at 4.48.50 PM.jpeg" alt="Card image" style="width:100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h3>Mining</h3>
                    <p>Mining is the extraction of valuable minerals or other geological materials from the Earth, usually from an ore body, lode, vein, seam, reef or placer deposit. These deposits form a mineralized commodity that is of economic interest to the miner.</p>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../frontend/img/DJI_0325.jpg')">
                <div class="transbox"></div>
                <div class="carousel-caption">
                    <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="../frontend/img/img_0335.jpg" alt="Card image" style="width:100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h3>Construction</h3>
                        <p>Construction is a general term meaning the art and science to form objects, systems, or organizations, and comes from Latin constructio (from com- "together" and struere "to pile up") and Old French construction. To construct is the verb: the act of building, and the noun is construction: how something is built, the nature of its structure.</p>
                    </div>
                    </div>
                </div>
            </div>
            <!--Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../frontend/img/DJI_0325.jpg')">
                <div class="transbox"></div>
                <div class="carousel-caption">
                    <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="../frontend/img/DJI_0026.jpg" alt="Card image" style="width:100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h3>Shipping</h3>
                        <p>We offer tailored shipping and logistics solutions for mining equipment, whether as built-up or knocked-down units, designed to offer you greater flexibility and efficiency savings.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section id="partner">
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
</section> --}}
</section>
<script>
    $('.carousel').carousel({
    pause: "false" /* Change to true to make it paused when your mouse cursor enter the background */
});



    </script>

  @endsection
