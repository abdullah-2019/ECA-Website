@extends('site.layouts.app')

@section('css')
    <style>
        .eca-timeline-title {
            font-size: 25px;
            margin-bottom: 10px;
            color: #ede9e9;
        }

        .eca-timeline-p {
            font-size: 15px;
            color: #ede9e9;
        }

        .eca-timeline {
            max-width: 1200px;
            position: relative;
            margin: 0 auto;
        }

        .eca-timeline::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 6px;
            margin-left: -3px;
            background-color: var(--primary-color);
        }

        .eca-container {
            width: 50%;
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
        }

        .eca-container::after {
            content: "";
            position: absolute;
            top: 15px;
            right: -12px;
            width: 25px;
            height: 25px;
            z-index: 1;
            border-radius: 50%;
            background-color: var(--primary-color);
            border: 5px solid #E5BF15;
        }

        .eca-timeline-left {
            left: 0;
        }

        .eca-timeline-right {
            left: 50%;
        }

        .eca-timeline-left::before {
            content: " ";
            position: absolute;
            top: 22px;
            right: 30px;
            width: 0;
            height: 0;
            z-index: 1;
            border: medium solid var(--primary-color);
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent var(--primary-color);
        }

        .eca-timeline-right::before {
            content: " ";
            position: absolute;
            top: 22px;
            left: 30px;
            width: 0;
            height: 0;
            z-index: 1;
            border: medium solid var(--primary-color);
            border-width: 10px 10px 10px 0;
            border-color: transparent var(--primary-color) transparent transparent;
        }

        .eca-timeline-right::after {
            left: -12px;
        }

        .content {
            padding: 20px 30px;
            position: relative;
            border-radius: 6px;
            background-color: var(--primary-color);
        }

        @media screen and (max-width: 600px) {
            .eca-timeline::after {
                left: 31px;
            }

            .eca-container {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .eca-container::before {
                left: 60px;
                border: medium solid var(--primary-color);
                border-width: 10px 10px 10px 0;
                border-color: transparent var(--primary-color) transparent transparent;
            }

            .eca-timeline-left::after,
            .eca-timeline-right::after {
                left: 14px;
            }

            .eca-timeline-right {
                left: 0%;
            }
        }
    </style>
@endsection

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Audit and Assurance Services</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>

        </div>
    </section>
@php $left="eca-timeline-left"; $right="eca-timeline-right"; @endphp
    <section>
        <div class="container">
            @foreach($descriptions as $description)
            <p>
               @php echo $description->description @endphp
            </p>
            @endforeach
        </div>
        <div class="eca-timeline">
            @foreach($services as $service)
                @if($service->id%2==0)
            <div class="eca-container @php echo $left @endphp" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="1000">
                <div class="content">
                    <h2 class="eca-timeline-title">{{ $service->title }}</h2>
                    <p class="eca-timeline-p">
                        @php echo $service->description @endphp
                    </p>
                </div>
            </div>
                @else
                    <div class="eca-container @php echo $right @endphp" data-aos="fade-up" data-aos-easing="ease-in-out"
                         data-aos-duration="1000">
                        <div class="content">
                            <h2 class="eca-timeline-title">{{ $service->title }}</h2>
                            <p class="eca-timeline-p">
                                @php echo $service->description @endphp
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection
