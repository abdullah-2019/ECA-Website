@auth
    @extends('layouts.app-master')

    @section('content')
        <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>team</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">team</li>
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
                    <form class="float-left" action="{{ route('team.search') }}" method="GET">
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
                    <a class="btn btn-warning btn-sm float-right" href="{{ route('team.create') }}"> <i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>

        <div class="row">
            @forelse ($teams as $team)
            <div class="col-md-4">
                <!-- DIRECT CHAT PRIMARY -->
                <div class="card card-warning  direct-chat direct-chat-warning">
                    <div class="card-header text-white">
                        <h3 class="card-title">{{ $team->title }}</h3>

                        <div class="card-tools text-white">
                            <button type="button" class="btn btn-tool text-white" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool text-white" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <!-- Conversations are loaded here -->
                        <div class="card-img-top">
                            <img src="{{ asset($team->image) }}" class="img-fluid" style="max-height: 200px; min-width: 300px;">
                        </div>
                        <div class="row"> <div class="text-justify p-4">{{ $team->position }}<br>
                                @php echo $team->social_links @endphp</div></div>
                        <div class="row " style="margin-top: -30px">
                            @php
                                 $lastLetter = '';
                            @endphp
                            @if($lastLetter != $team->description)
                                <div class="text-justify p-4">
                                @php
                                    $lastLetter = strip_tags($team->description);
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
                        <form action="{{ route('team.destroy',$team->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('team.show',$team->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('team.edit',$team->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

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
                {!! $teams->withQueryString()->links('pagination::bootstrap-5') !!}

            </div>
        </section>
    @endsection
@endauth
