@extends('frontend.master')

@section('content')

<section id="about">

    <div class="jumbotron1 jumbotron-fluid">
        {{-- <div class="row"> --}}
            <div class="container-fluid">
                <h1 class="display-4">{{ __('header.about.about') }}</h1>
                {{-- <div class="col-lg-8 content order-lg-1 order-2"> --}}
                    <p class="lead">{{ __('about.about') }}</p>
                {{-- </div> --}}
                {{-- <div class="col-lg-6 content order-lg-1 order-2">
                    <img src="../frontend/img/Untitled.jpg" alt="">
                </div>
            </div> --}}
            </div>
    </div>

    {{-- <div class="jumbotronx jumbotron-fluid">
        <div class="col-lg-6 content order-lg-1 order-2">
        </div>
        <div class="visi col-lg-6 content order-lg-1 order-2">
            <h1 class="display-4">{{ __('about.vision.vision') }}</h1>
            <p class="lead wow fadeInRight">{{ __('about.vision.text') }}</p>
        </div>
    </div> --}}

    <div class="jumbotron2 jumbotron-fluid">
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
    </div>

    {{-- <div class="jumbotron5 jumbotron-fluid">
            <div class="col-lg-6 content order-lg-1 order-2">
                <div class="container-fluid">
                    <h1 class="display-4">{{ __('about.area.area') }}</h1>
                    <p class="lead wow fadeInLeft">{{ __('about.area.text') }}<br>{{ __('about.area.text2') }}<br>{{ __('about.area.text3') }} </p>
            </div>
            <div class="col-lg-6 content order-lg-1 order-2 ">
                <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.82837717657!2d121.50134565813241!3d-2.1709359996043935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMsKwMTAnMTUuNCJTIDEyMcKwMzAnMDguOCJF!5e1!3m2!1sid!2sid!4v1605601097932!5m2!1sid!2sid"></iframe>
            </div>
        </div>
    </div> --}}
  </section>
  <!-- #about -->
@endsection
