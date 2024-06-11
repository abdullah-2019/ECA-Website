<style>

    .card-big-shadow {
        max-width: 320px;
        position: relative;
    }

    .card[data-radius="none"] {
        border-radius: 0px;
    }
    .card {
        border-radius: 8px;
        box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
        background-color: #FFFFFF;
        color: #252422;
        margin-bottom: 0px;
        position: relative;
        z-index: 1;
    }


    .card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
        color: #FFFFFF;
    }
    .card.card-just-text .content {
        padding: 5px 5px;
        text-align: left;
        text-justify: newspaper!important;
    }
    .card .content {
        padding: 10px 10px 0px 10px;
    }
    .card[data-color="blue"] .category {
        color: #7a9e9f;
    }

    .card .category, .card .label {
        font-size: 14px;
        margin-bottom: 0px;
    }
    .card-big-shadow:before {
        background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        bottom: -12%;
        content: "";
        display: block;
        left: -12%;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }
    h4, .h4 {
        font-size: 1.5em;
        font-weight: 600;
        line-height: 1.2em;
    }
    h6, .h6 {
        font-size: 0.9em;
        font-weight: 600;
        text-transform: uppercase;
    }
    .card .description {
        font-size: 16px;
        color: #66615b;
    }

    a:hover, a:focus {
        text-decoration: none;
    }

    /*======== COLORS ===========*/
    .card[data-color="blue"] {
        background: #b8d8d8;
    }
    .card[data-color="blue"] .description {
        color: #506568;
    }

</style>
@auth
    @extends('layouts.app-master')

    @section('content')
        <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>events</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">events</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @session('success')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa fa-ticket"></i> &nbsp; &nbsp; &nbsp; &nbsp;{{ $value }}
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                @endsession
                <div class="row ">
                    <div class="col-md-4">
                        <form class="float-left" action="{{ route('events.search') }}" method="GET">
                            <div class="input-group">
                                <input name="search" class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button  type="submit" class="btn btn-sidebar btn-dark">
                                        <i class="fas fa-search fa-fw"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <a class="btn btn-success btn-sm float-right" href="{{ route('events.create') }}"> <i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>
            <div class="row">
                @forelse ($events as $event)
                    <div class="col-md-4 col-sm-6">
                        <div class="content-card">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                         <a href="{{ route('events.show',$event->id) }}" target="_blank">
                             <div class="card-image">
                                <div class="hover-text">
                                    <b>@php $temp = explode(' ',$event->created_at); echo $temp[0]; @endphp</b>
                                    <img src="{{ asset($event->image)  }}" class="card-img-top" alt="...">
                                </div>
                            </div>
                         </a>
                            <div class="content">
                                <h4 class="title">{{ $event->title }}</h4>
                                @php
                                $lastLetter = '';
                           @endphp
                           @if($lastLetter != $event->description)
                                <p class="description"> @php
                                    $lastLetter = strip_tags($event->description);
                                 $string = $lastLetter;
                            if (strlen($string) > 150) {
                                $stringCut = substr($string, 0, 150);
                                $endPoint = strrpos($stringCut, ' ');
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);

                            }
                            echo $string;
                                @endphp</p>
                                @endif
                                <p class="description">
                                    <form action="{{ route('events.destroy',$event->id) }}" method="POST">

                                        <a class="btn btn-info btn-sm" href="{{ route('events.show',$event->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                                        <a class="btn btn-primary btn-sm" href="{{ route('events.edit',$event->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    @empty
                    <div class="col-md-4">
                        <p >There are no data.</p>
                    </div>
                 @endforelse

            </div>
                {!! $events->withQueryString()->links('pagination::bootstrap-5') !!}

        </div>
    </section>

@endsection
@endauth
