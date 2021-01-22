@extends('frontend.master')

@section('content')

<section id="services">
    <div class="container">
        <h4 class="display-4">{{ __('service.title1') }}</h4>
        <hr style="border-color: blanchedalmond">
        <p class="lead">{{ __('service.text1') }}</p>

        <div class="cardWrapper">

            <!-- first Row -->
            <div class="row">
                <div class="col-lg-4 cardContainer">
                    <div class="card" style="background-image: url(../../frontend/img/IMG_0363.png);background-size:cover; ">
                        <div class="front">
                            <h4 class="cardTitle">mining</h4>
                        </div>
                        <div class="back">
                            <div class="content">
                                {{-- <p class="cardTitle">{{ __('about.vision.text') }}</p> --}}
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 cardContainer">
                    <div class="card" style="background-image: url(../../frontend/img/IMG_0082.jpeg);background-size:cover; ">
                        <div class="front">
                            <h4 class="cardTitle">contructing</h4>
                        </div>
                        <div class="back">
                            <div class="content">
                                {{-- <p class="cardTitle">{{ __('about.vision.text') }}</p> --}}
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 cardContainer">
                    <div class="card" style="background-image: url(../../frontend/img/IMG_02891.png);background-size:cover; ">
                        <div class="front">
                            <h4 class="cardTitle">shipping</h4>
                        </div>
                        <div class="back">
                            <div class="content">
                                {{-- <p class="cardTitle">{{ __('about.mision.text') }}</p> --}}
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- first Row End -->
        </div><!--cardWrapper Ends-->
    </div>

    {{-- <div class="jumbotron1 jumbotron-fluid">
        <div class="container-fluid">
            <h4 class="display-4">{{ __('service.title1') }}</h4>
            <div class="col-lg-12 content order-lg-1 order-2">
                <p class="lead">{{ __('service.text1') }}</p>
            </div>
        </div>
    </div> --}}
</section><!-- #services -->
<script>
    $('.card').click(function(){
        $(this).toggleClass('flipped');
    });
    </script>
@endsection
