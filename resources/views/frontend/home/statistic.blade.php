@extends('frontend.master')

@section('content')

<section id="statistic">
        <div class="jumbotron1 jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">statistic of dbm</h1>
              {{-- <div class="col-lg-6 content order-lg-1 order-2">
              </div> --}}
              {{-- <div class="col-lg-6 content order-lg-1 order-2">
              <p class="lead">Menjadi Perusahaan Nasional yang Mengembangkan Penggunaan Aspek Sumber Daya Lokal Dengan Proses Pengembangan yang Berkesinambungan.</p>
              </div> --}}
            </div>
        </div>

    <div class="container wow fadeIn">

        <div class="row">
            <div class="col-lg-6">
                <div class="chart1">
            </div>
        </div>
        {{-- <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">232</span>
                <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">521</span>
                <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">1,463</span>
                <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">15</span>
                <p>Hard Workers</p>
            </div>

        </div> --}}
    </div>
</section><!-- #facts -->

@endsection

@section('content-js')
    <script type="text/javascript">

        Highcharts.chart('chart1', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Monthly Average Rainfall'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Rainfall (mm)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tokyo',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

            }, {
                name: 'New York',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

            }, {
                name: 'London',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

            }, {
                name: 'Berlin',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

            }]
        });

    </script>

@endsection
