@extends('site.layouts.app')

@section('css')
    <link href="{{ asset('../site-assets/css/moving-box-carousel.css') }}" rel="stylesheet">
@endsection

@include('site.home.slideshow.index')

<main id="main">

    @include('site.home.our-offer.index')

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">

            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-3 d-flex d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">

                        @php echo $service->description @endphp


                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="section-title mt-3">
                    <h2>What We have Done</h2>
                    {{-- <p>EAGLE WISE Chartered Accountants Company shaping The Future Together</p> --}}
                </div>
            </div>
            @foreach ($whatwedo as $whatwe)
            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                       data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                    @php echo $whatwe->description @endphp
                </div>
            </div>
            @endforeach
        </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Features Section ======= -->
    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2>About ECA</h2>
                <p>EAGLE WISE Chartered Accountants Company shaping The Future Together</p>
            </div>
            @php $x=1; $order1=" order-1 order-md-2"; $order2=" order-2 order-md-1"; @endphp
            @foreach ($abouts as $about)
                @if($x%2==0)
            <div class="row" data-aos="fade-up">
                <div class="col-md-5 {{ $order1 }}">
                    <img src="{{ asset($about->image) }}" class="img-fluid" alt="why us"
                         loading="lazy">
                </div>
                <div class="col-md-7 pt-5 {{ $order2 }}">
                    <h3>{{ $about->title }}</h3>
                    @php echo $about->description @endphp
                </div>
            </div>
                @else
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-5 {{ $order2 }}">
                            <img src="{{ asset($about->image) }}" class="img-fluid" alt="why us"
                                 loading="lazy">
                        </div>
                        <div class="col-md-7 pt-5 {{ $order1 }}">
                            <h3>{{ $about->title }}</h3>
                            @php echo $about->description @endphp
                        </div>
                    </div>
                @endif
                @php $x++ @endphp
            @endforeach
        </div>
    </section><!-- End Features Section -->


    @include('site.home.facts.index')

</main>


@section('js')
    <script src="{{ asset('site-assets/js/moving-box-carousel.js') }}"></script>
@endsection
