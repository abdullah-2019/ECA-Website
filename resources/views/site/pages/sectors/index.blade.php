@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sectors</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Sectors</li>
                </ol>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
        <div class="container">

            <div class="section-title justify-content-around">
                @foreach($sectors as $sector)
                <h2>{{ $sector->title }}</h2>
                    @php echo $sector->description @endphp
                @endforeach
                <div class="row">
                    @foreach($sectorspoints as $sectorpoint)
                    <div class="col-md-4">
                        @php echo $sectorpoint->description @endphp
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="row no-gutters">
                @php $x=1; @endphp
                @foreach($sectorscards as $sectorcard)
                    @if($x%2==0)
                        <div class="col-lg-4 box featured sector-box">
                            <img src="{{ asset($sectorcard->image) }}" alt="img">
                            <h5>{{ $sectorcard->title }}</h5>
                            <p>
                                @php echo $sectorcard->description @endphp
                            </p>
                        </div>
                    @else
                        <div class="col-lg-4 box sector-box">
                            <img src="{{ asset($sectorcard->image) }}" alt="img">
                            <h5>{{ $sectorcard->title }}</h5>
                            <p>
                                @php echo $sectorcard->description @endphp
                            </p>
                        </div>
                    @endif
                    @php $x++ @endphp
                @endforeach


            </div>

        </div>
    </section><!-- End Pricing Section -->
@endsection
