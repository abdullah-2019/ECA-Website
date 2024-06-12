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
                @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            {{-- <div class="member-img">
                            <img src="{{ asset($team->image) }}" class="img-fluid" alt="image"
                                loading="lazy">
                            <div class="social">
                                @php echo $team->social_links @endphp
                            </div>
                        </div> --}}
                            <div class="member-info">
                                <div style="display: flex; flex-direction: row; align-items: center;  padding-left: 0px;">
                                    <img src="{{ asset($team->image) }}" alt="profile" loading="lazy"
                                        style="width: 60px; hieght: 60px; border-radius: 50%; margin: 0px; 0px;">
                                    <div style="margin: 0px 10px;">
                                        <h4 class="" style=" margin-bottom: 0px;">
                                            <small>{{ $team->title }}</small>
                                        </h4>
                                        <span
                                            style="margin-top: 0px;"><small><small>{{ $team->position }}</small></small></span>
                                    </div>
                                </div>

                                @php echo $team->description @endphp

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Team Section -->
@endsection
