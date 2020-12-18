<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
  <meta charset="utf-8">
  <title>Djava Berkah Mineral</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- awal datatable card --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="itmilenial">
  <meta name = "author" content = "itmilenial, dev.itmilenial@gmail.com">
  <Meta name = "rating" content = "General">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
   {{-- akhir datatable card --}}
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


  <!-- Favicons -->
  <link href="/frontend/img/logo-tittle.png" rel="icon">
  <link href="/frontend/img/logo-tittle.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/frontend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/frontend/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/frontend/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/frontend/css/style.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-1.10.2.js" integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo=" crossorigin="anonymous"></script>
  <script src="jquery.backstretch.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>






  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->

    @include('frontend.layout.header')

  <!--==========================
    Hero Section
  ============================-->


  <main id="main">

    <!--==========================
      About Us Section
    ============================-->

    @yield('content')

    {{-- @include('home.statistic') --}}

     <!--==========================
      Team Section
    ============================-->

    {{-- @include('home.team') --}}


    <!--==========================
      Services Section
    ============================-->
    {{-- @include('home.service') --}}

    <!--==========================
      Gallery Section
    ============================-->

    {{-- @include('home.gallery') --}}

    <!--==========================
      Info Section
    ============================-->

    {{-- @include('home.info') --}}

    <!--==========================
      Contact Section
    ============================-->

    @include('frontend.home.contact')

  </main>

  <!--==========================
    Footer
  ============================-->


  @include('frontend.layout.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/frontend/lib/jquery/jquery.min.js"></script>
  <script src="/frontend/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/frontend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/frontend/lib/easing/easing.min.js"></script>
  <script src="/frontend/lib/wow/wow.min.js"></script>
  <script src="/frontend/lib/counterup/counterup.min.js"></script>
  <script src="/frontend/lib/waypoints/waypoints.min.js"></script>
  <script src="/frontend/lib/superfish/hoverIntent.js"></script>
  <script src="/frontend/lib/superfish/superfish.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/frontend/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/frontend/js/main.js"></script>
@yield('content-js')
</body>
</html>

{{-- Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> --}}
