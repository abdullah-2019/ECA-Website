@auth
    @extends('layouts.app-master')

    @section('content')
        <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">home</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
               <div class="col-md-6">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title"> Add Category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form  action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" >
                        <div class="card-body">
                            <!-- form start -->

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-dark btn-sm" href="{{ route('categories') }}"><i class="fa fa-arrow-left"></i> Back</a>
                            </div>

                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror"
                                       id="inputName"
                                       placeholder="Category">
                                @error('category')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </form>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
            </div>
        </section>
    @endsection
@endauth
