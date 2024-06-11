@extends('layouts.app-master')

@section('content')
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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $events->title }}</h3>

                    <div class="card-tools">
                        <a class="btn btn-primary btn-sm" href="{{ route('events.list') }}"><i class="fa fa-arrow-left"></i> Back</a>

                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
        <div class="card-body">


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        @php
                            $lastLetter = '';
                        @endphp
                        @if($lastLetter != $events->description)
                            <div class="text-justify p-4">
                                @php
                                    $lastLetter = $events->description;
                                 echo  $lastLetter;
                                @endphp
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <img src="{{ asset($events->image) }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary btn-sm" href="{{ route('events.list') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
    </div>
        </div>
    </section>

@endsection
