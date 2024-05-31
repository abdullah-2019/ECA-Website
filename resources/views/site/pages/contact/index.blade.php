@extends('site.layouts.app')

@section('content')
    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>{{ config('constants.org-address') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>{{ config('constants.org-email') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>{{ config('constants.org-phone') }}</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form  action="{{ route('contactus.store') }}" method="POST"   class="php-email-form">
                       @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Your Name" required>
                                @error('name')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    placeholder="Your Email" required>
                                @error('email')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject"
                                required>
                            @error('subject')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="6" placeholder="Message" required></textarea>
                            @error('message')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-3">

                                @session('success')
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fa fa-ticket"></i> &nbsp; &nbsp; &nbsp; &nbsp;{{ $value }}
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                @endsession

                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
        <div class="container-fluid p-0">
            {{-- <iframe
                src="https://www.google.com/maps/place/Muslim+Plaza/@34.5372804,69.1693916,21z/data=!4m6!3m5!1s0x38d16f005d4b090b:0xff302bd858667a8c!8m2!3d34.5372452!4d69.1693901!16s%2Fg%2F11vrg7tw8b?entry=ttu"
                frameborder="0" style="border:0;" allowfullscreen=""></iframe> --}}
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d205.4152546901584!2d69.16949084173356!3d34.537244495784336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d16f005d4b090b%3A0xff302bd858667a8c!2sMuslim%20Plaza!5e0!3m2!1sen!2s!4v1713248955810!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section><!-- End Map Section -->
@endsection
