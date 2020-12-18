@extends('frontend.master')

@section('content')

<section id="services">
    <div class="jumbotron1 jumbotron-fluid">
        {{-- <div class="row"> --}}
            <div class="container-fluid">
                <h1 class="display-4">{{ __('service.title1') }}</h1>
                    <div class="col-lg-12 content order-lg-1 order-2">
                        <p class="lead">{{ __('service.text1') }}</p>
                    </div>
                {{-- <div class="col-lg-6 content order-lg-1 order-2">
                    <img src="../frontend/img/Untitled.jpg" alt="">
                </div>
            </div> --}}
        </div>
    </div>
</section><!-- #services -->

    <section id="drilling">
        <div class="jumbotron2 jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="display-4">DRILLING</h1>
                    <div class="col-lg-6 content order-lg-1 order-2">
                    </div>
            {{-- <div class="col-lg-6 content order-lg-1 order-2">
            <p class="lead">Menjadi Perusahaan Nasional yang Mengembangkan Penggunaan Aspek Sumber Daya Lokal Dengan Proses Pengembangan yang Berkesinambungan.</p>
            </div> --}}
            </div>
        </div>
    </section>

    <section id="mining">
        <div class="jumbotron3 jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="display-4">MINING</h1>

            {{-- <div class="col-lg-6 content order-lg-1 order-2">
            <p class="lead">Mengembangkan Sumber Daya Mannusia, Teknologi dan Konsep Dasar Proses yang Efisien, Tepat Guna Untuk Memenuhi Pasar Nasional dan Kepuasan Pelanggan.</p>
            </div> --}}
            </div>
        </div>
    </section>

    <section id="construction">
        <div class="jumbotron4 jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="display-4">CONSTRUCTION</h1>
                    <div class="col-lg-6 content order-lg-1 order-2">
                    </div>
            {{-- <div class="col-lg-6 content order-lg-1 order-2">
            <p class="lead">Menyediakan Kesempatan Jangka Panjang yang BerkesinambunganDalam Proses Pengembangan Sumber Daya Sebagai Komitmen Kami Kepada Pelanggan dan Negara</p>
            </div> --}}
            </div>
        </div>
    </section>

    <section id="shipping">
        <div class="jumbotron5 jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="display-4">SHIPPING</h1>
                    <div class="col-lg-6 content order-lg-1 order-2">
                    </div>
            {{-- <div class="col-lg-6 content order-lg-1 order-2">
            <p class="lead">Menyediakan Kesempatan Jangka Panjang yang BerkesinambunganDalam Proses Pengembangan Sumber Daya Sebagai Komitmen Kami Kepada Pelanggan dan Negara</p>
            </div> --}}
            </div>
        </div>
    </section>

@endsection
