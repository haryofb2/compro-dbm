@extends('backend.master')
@section('content')
<section id="dashboard">
    <div class="container">
        <h2>menu</h2>
        @foreach ($menu as $m)
        {{-- <div class="col-6"> --}}
            <a class='menu' href='/{{$m->link}}'>
            <button class="button button-menu">
                <p>{{$m->name}}</p>
                </button>
            </a>
        {{-- </div> --}}
        @endforeach
    </div>
    <div class="container">
        <h2>transaksi</h2>
        @foreach ($trans as $trans)
        {{-- <div class="col-4"> --}}
            <a class='menu' href='/{{$trans->link}}'>
            <button class="button button-menu">
                <p>{{$trans->name}}</p>
                </button>
            </a>
        {{-- </div> --}}
        @endforeach
    </div>
    <div class="container">
        <h2>master</h2>
        @foreach ($master as $master)
        {{-- <div class="col-4"> --}}
            <a class='menu' href='/{{$master->link}}'>
            <button class="button button-menu">
                <p>{{$master->name}}</p>
                </button>
            </a>
        {{-- </div> --}}
        @endforeach
    </div>
</section>
@endsection
