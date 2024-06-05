@extends('site.layouts.app')

@section('content')
    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Team</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Our Team</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <h3 class="text-center">SENIOR MANAGEMENT</h3>

                <br>
                <br>
                <br>
                <br>
                    @foreach($teams as $team)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset($team->image) }}" class="img-fluid" alt="image"
                                loading="lazy">
                            <div class="social">
                                @php echo $team->social_links @endphp
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $team->title }}</h4>
                            <span>{{ $team->position }}</span>

                                @php echo $team->description @endphp
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Team Section -->
@endsection
