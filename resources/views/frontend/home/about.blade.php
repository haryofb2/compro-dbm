@extends('frontend.master')

@section('content')

<section id="about">

    <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h4 class="display-4">{{ __('header.about.about') }}</h4>
                <hr style="border-color: blanchedalmond">
                <img class="logo1" src="/frontend/img/logo_final.png">
                    <p class="lead">
                        {{ __('about.about1') }}
                    </p>
                    <p class="lead">{{ __('about.about2') }}</p>
                    <p class="lead">{{ __('about.about3') }}</p>
                    <p class="lead">{{ __('about.about4') }}</p>
            </div>
    </div>

    <div class="container">
        <div class="cardWrapper">

            <!-- first Row -->
            <div class="row">
                <div class="col-lg-4 cardContainer">
                    <div class="card" style="background-image: url(../../frontend/img/IMG_0363.png);background-size:cover; ">
                        <div class="front">
                            <h1 class="cardTitle">{{ __('about.vision.vision') }}</h1>
                            <p>click for detail</p>
                        </div>
                        <div class="back">
                            <div class="content">
                                <p class="cardTitle">{{ __('about.vision.text') }}</p>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 cardContainer">
                    <div class="card" style="background-image: url(../../frontend/img/IMG_0082.jpeg);background-size:cover; ">
                        <div class="front">
                            <h1 class="cardTitle">{{ __('about.mision.mision') }}</h1>
                            <p>click for detail</p>

                        </div>

                        <div class="back">
                            <div class="content">
                                <p class="cardTitle">{{ __('about.mision.text') }}</p>
                                <br/>
                            </div>
                        </div>
                    </div>
                    {{-- <p>click card to flip</p> --}}

                </div>
                <div class="col-lg-4 cardContainer">
                    <div class="card" style="background-image: url(../../frontend/img/IMG_02891.png);background-size:cover; ">
                        <div class="front">
                            <h1 class="cardTitle">{{ __('about.value.value') }}</h1>
                            <p>click for detail</p>

                        </div>
                        <div class="back">
                            <div class="content">
                                <p class="cardTitle">{{ __('about.value.text') }}</p>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- first Row End -->
        </div><!--cardWrapper Ends-->

    </div>
</section>



    {{-- <div class="card2">
        <div class="front"><h2>Sobre</h2></div>
            <div class="back">
                <div class="content">
                    <h3 class="cardTitle">Quem eu sou?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sodales, mi ac vulputate blandit, libero nulla bibendum quam.</p>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="jumbotron2 jumbotron-fluid">
        <div class="col-lg-6 content order-lg-1 order-2">
            <div class="jumbotron21 jumbotron">
                <div class="container-fluid">
                    <h1 class="display-4">{{ __('about.vision.vision') }}</h1>
                    <p class="lead wow fadeInRight">{{ __('about.vision.text') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron3 jumbotron-fluid">
        <div class="col-lg-6 content order-lg-1 order-2">
            <div class="jumbotron31 jumbotron">
                <div class="container-fluid">
                    <h1 class="display-4">{{ __('about.mision.mision') }}</h1>
                    <p class="lead wow fadeInLeft">{{ __('about.mision.text') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron4 jumbotron-fluid">
        <div class="col-lg-6 content order-lg-1 order-2">
            <div class="jumbotron41 jumbotron">
                <div class="container-fluid">
                    <h1 class="display-4">{{ __('about.value.value') }}</h1>
                    <p class="lead wow fadeInRight">{{ __('about.value.text') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron5 jumbotron">
        <div class="container">
            <div class="col-lg-6 content order-lg-1 order-2 ">
                <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.82837717657!2d121.50134565813241!3d-2.1709359996043935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMsKwMTAnMTUuNCJTIDEyMcKwMzAnMDguOCJF!5e1!3m2!1sid!2sid!4v1605601097932!5m2!1sid!2sid"></iframe>
            </div>
            <div class="col-lg-6 content order-lg-1 order-2">
                    <h1 class="display-4">{{ __('about.area.area') }}</h1>
                    <p class="lead wow fadeInLeft">{{ __('about.area.text') }}<br>{{ __('about.area.text2') }}<br>{{ __('about.area.text3') }} </p>
            </div>
        </div>
    </div> --}}
<script>
$('.card').click(function(){
    $(this).toggleClass('flipped');
});
</script>


@endsection
