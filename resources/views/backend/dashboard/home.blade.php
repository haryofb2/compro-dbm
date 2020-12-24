@extends('backend.master')
@section('content')
<section id="dashboard">
    <div class="container">
        <h2>master</h2>
       {{-- <div class="col-6"> --}}
        <a class='menu' href='/backend_info'>
            <button class="button button-menu">
                <p>divition</p>
            </button>
        </a>
        {{-- </div> --}}
        {{-- <div class="col-6"> --}}
        <a class='menu' href='/backend_info'>
            <button class="button button-menu">
                <p>position</p>
            </button>
        </a>
            {{-- </div> --}}
            {{-- <div class="col-6"> --}}
        <a class='menu' href='/backend_info'>
            <button class="button button-menu">
                <p>cabang</p>
            </button>
        </a>
                {{-- </div> --}}
    </div>

    <div class="container">
        <h2>TRANSACTION</h2>
        {{-- <div class="col-6"> --}}
        <a class='menu' href='/#'>
            <button class="button button-menu">
                <p>ore</p>
            </button>
        </a>
            {{-- </div> --}}
            {{-- <div class="col-6"> --}}
        <a class='menu' href='/#'>
            <button class="button button-menu">
                <p>obb</p>
            </button>
        </a>
                {{-- </div> --}}
    </div>

    <div class="container">
        <h2>menu</h2>
        {{-- <div class="col-6"> --}}
        <a class='menu' href='/backend_info'>
            <button class="button button-menu">
                <p>information</p>
            </button>
        </a>
        {{-- </div> --}}
        {{-- <div class="col-6"> --}}
        <a class='menu' href='/backend_event'>
            <button class="button button-menu">
                <p>event</p>
            </button>
        </a>
            {{-- </div> --}}{{-- <div class="col-6"> --}}
        <a class='menu' href='/backend_employee'>
            <button class="button button-menu">
                <p>employee</p>
            </button>
        </a>
            {{-- </div> --}}{{-- <div class="col-6"> --}}
        <a class='menu' href='/backend_partner'>
            <button class="button button-menu">
                <p>partner</p>
            </button>
        </a>
            {{-- </div> --}}
    </div>
</section>
@endsection
