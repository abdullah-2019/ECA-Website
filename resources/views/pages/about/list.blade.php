@auth
    @extends('layouts.app-master')

    @section('content')
        <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
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
                <div class="row mb-4">
                    <div class="col-md-4">
                    <form class="float-left" action="{{ route('about.search') }}" method="GET">
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
                    <a class="btn btn-success btn-sm float-right" href="{{ route('about.create') }}"> <i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>

        <div class="row">
            @forelse ($abouts as $about)
            <div class="col-md-4">
                <!-- DIRECT CHAT PRIMARY -->
                <div class="card card-primary card-outline direct-chat direct-chat-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ $about->title }}</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <!-- Conversations are loaded here -->
                        <div class="card-img-top">
                            <img src="{{ asset($about->image) }}" class="img-fluid" style="max-height: 200px; min-width: 300px;">
                        </div>
                        <div class="row">
                            @php
                                 $lastLetter = '';
                            @endphp
                            @if($lastLetter != $about->description)
                                <div class="text-justify p-4">
                                @php
                                    $lastLetter = strip_tags($about->description);
                                 $string = $lastLetter;
                            if (strlen($string) > 150) {
                                $stringCut = substr($string, 0, 150);
                                $endPoint = strrpos($stringCut, ' ');
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);

                            }
                            echo $string;
                                @endphp
                                </div>
                            @endif
                        </div>
                        <!-- /.direct-chat-pane -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <form action="{{ route('about.destroy',$about->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('about.show',$about->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('about.edit',$about->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!--/.direct-chat -->
            </div>
            @empty
                <div class="col-md-4">
                    <p >There are no data.</p>
                </div>
            @endforelse
            <!-- /.col -->

        </div>
                {!! $abouts->withQueryString()->links('pagination::bootstrap-5') !!}

            </div>
        </section>
    @endsection
@endauth
