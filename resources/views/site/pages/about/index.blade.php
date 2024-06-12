@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ol>
            </div>

        </div>
    </section>


    <!-- ======= Features Section ======= -->
    <section class="features">
        <div class="container">

            {{-- <div class="section-title">
                <h2>About ECA</h2>
                <p>EAGLE WISE Chartered Accountants Company shaping The Future Together</p>
            </div> --}}
            @php
                $x = 1;
                $order1 = ' order-1 order-md-2';
                $order2 = ' order-2 order-md-1';
            @endphp
            @foreach ($abouts as $about)
                @if ($x % 2 == 0)
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-5 {{ $order1 }}">
                            <img src="{{ asset($about->image) }}" class="img-fluid" alt="why us" loading="lazy">
                        </div>
                        <div class="col-md-7 pt-5 {{ $order2 }}">
                            <h3>{{ $about->title }}</h3>
                            @php echo $about->description @endphp
                        </div>
                    </div>
                @else
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-5 {{ $order2 }}">
                            <img src="{{ asset($about->image) }}" class="img-fluid" alt="why us" loading="lazy">
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



    <!-- ======= About Section ======= -->
    <section class="facts section-bg aos-init aos-animate" data-aos="fade-up">
        <div class="container">
            @foreach ($privacy as $privac)
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset($privac->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>{{ $privac->title }}</h3>

                        @php echo $privac->description @endphp
                    </div>
                </div>
            @endforeach

        </div>
    </section><!-- End About Section -->
@endsection
