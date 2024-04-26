@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Payroll Processing</h2>
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
                    <img src="{{ asset('site-assets/img/payroll.png') }}" class="img-fluid" alt="payroll-services"
                        loading="lazy">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Payroll Processing</h3>
                    <p>
                        ECA simplifies payroll management by offering efficient and accurate payroll processing services.
                        Our streamlined systems ensure timely and error-free salary disbursement while adhering to
                        regulatory requirements.independence.
                    </p>
                </div>
                <br>
            </div>

        </div>
    </section>
@endsection
