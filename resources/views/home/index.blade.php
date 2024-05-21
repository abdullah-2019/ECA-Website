@auth
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">

            <h1>Dashboard</h1>
            <p class="lead">Only authenticated users can access this section.</p>
            <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>


    </div>
@endsection
@endauth

@guest
    @extends('site.layouts.app')

    @section('css')
        <link href="{{ asset('../site-assets/css/moving-box-carousel.css') }}" rel="stylesheet">
    @endsection

    @include('site.home.index')

    @section('js')
        <script src="{{ asset('site-assets/js/moving-box-carousel.js') }}"></script>
    @endsection
@endguest
