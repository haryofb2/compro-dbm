@extends('backend.master')
@section('content')
<section id="dashboard">
    <div class="container">
        <h4>master</h4>
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
        <h4>TRANSACTION</h4>
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
        <a class='menu' href='/#'>
            <button class="button button-menu">
                <p>fuel</p>
            </button>
        </a>
                {{-- </div> --}}
    </div>

    <div class="container">
        <h4>menu</h4>
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
