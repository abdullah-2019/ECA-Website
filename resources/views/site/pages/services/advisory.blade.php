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
            @foreach($services as $service)
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset($service->image) }}" class="img-fluid" alt="payroll-services"
                             loading="lazy">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>{{ $service->title }}</h3>
                        <p>
                            @php echo $service->description @endphp
                        </p>

                    </div>
                    <br>
                </div>
            @endforeach

        </div>
    </section>
@endsection
