@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Advisory and Consultancy</h2>
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
                    <img src="{{ asset('site-assets/img/advisory.jpg') }}" class="img-fluid" alt="advisory-services"
                        loading="lazy">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Advisory and Consultancy</h3>
                    <p>
                        Tailored solutions for your business challenges ECA's Advisory and consultancy services encompass a
                        wide spectrum of business needs, ranging from strategic planning and risk management to performance
                        optimization and operational efficiency. We collaborate closely with clients to devise actionable
                        strategies that drive growth and enhance competitiveness. Our advisory teams collaborate with you to
                        address challenges, crafting innovative solutions with a unique blend of scale, expertise, and
                        service excellence you’ll find only here.
                    </p>
                </div>
                <br>
            </div>

        </div>
    </section>
@endsection
