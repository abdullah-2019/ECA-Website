@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Cash Distribution Services</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="about" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('site-assets/img/cash-distribution.webp') }}" class="img-fluid"
                        alt="cash-distribution-services" loading="lazy">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Cash Distribution Services</h3>
                    <p>
                        With an emphasis on security and efficiency, eca facilitates secure cash distribution services for
                        clients across various sectors. Our meticulous processes mitigate risks associated with cash
                        handling and transportation.
                    </p>
                </div>
                <br>
            </div>

        </div>
    </section>
@endsection
