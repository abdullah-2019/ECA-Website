@extends('site.layouts.app')

@section('css')
    <link href="{{ asset('../site-assets/css/moving-box-carousel.css') }}" rel="stylesheet">
@endsection

@include('site.home.index')

@section('js')
    <script src="{{ asset('site-assets/js/moving-box-carousel.js') }}"></script>
@endsection
