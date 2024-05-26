@auth
    @extends('layouts.app-master')

    @section('content')
        <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>sector</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">sector</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Edit ({{ $sector->title }})</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form  action="{{ route('sector.update',$sector->id) }}" method="POST" enctype="multipart/form-data">

                        <div class="card-body">
                            <!-- form start -->

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-success btn-sm" href="{{ route('sector.list') }}"><i class="fa fa-arrow-left"></i> Back</a>
                            </div>

                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" value="{{ $sector->title }}" class="form-control @error('title') is-invalid @enderror"
                                       id="inputName"
                                       placeholder="Title">
                                @error('title')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Image</label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror"
                                               id="inputImage">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                         @error('image')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>

                                </div>
                                <img src="{{ asset($sector->image) }}" width="300px">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          style="height:150px"
                                          name="description"
                                          id="editor"
                                          placeholder="Description">  @php
                                        $lastLetter = $sector->description;
                                     echo  $lastLetter;
                                    @endphp</textarea>
                                @error('description')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
                        </div>
                    </form>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </section>
    @endsection
@endauth
