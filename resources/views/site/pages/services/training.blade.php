@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Training and Capacity Development </h2>
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
                    <img src="{{ asset('site-assets/img/trainings.png') }}" class="img-fluid" alt="tax-services"
                        loading="lazy">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Training and Capacity Development</h3>
                    <p>
                        Recognizing the importance of human capital, ECA offers tailored capacity-building programs designed
                        to enhance the skills and knowledge of personnel within organizations. Our training initiatives
                        contribute to improved financial management and decision-making.
                    </p>
                </div>
                <br>
            </div>

        </div>
    </section>
@endsection
