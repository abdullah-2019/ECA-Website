@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Legal Services</h2>
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
                    <img src="{{ asset('site-assets/img/legal.jpg') }}" class="img-fluid" alt="tax-services" loading="lazy">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Legal Services</h3>
                    <p>
                        Your Legal Partner in Securing compliance ECA extends a comprehensive suite of legal services
                        designed to facilitate seamless business operations. Our expertise encompasses the entire spectrum,
                        from company registration to de-registration, ensuring a smooth and compliant process throughout the
                        lifecycle of your business. We specialize in licensee renewal services, guiding clients through the
                        necessary steps to maintain legal standing and operational continuity. Additionally, our adept team
                        handles visa arrangements, streamlining the often intricate procedures associated with workforce
                        mobility. At ECA, we recognize the critical role legal compliance plays in the success of any
                        enterprise. Our commitment is to provide meticulous and timely legal services, allowing our clients
                        to focus on their core objectives with the assurance of a strong legal foundation supporting their
                        endeavors.
                    </p>
                </div>
                <br>
            </div>

        </div>
    </section>
@endsection
