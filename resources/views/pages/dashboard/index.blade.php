@auth
    @extends('layouts.app-master')

    @section('content')
        <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-dark btn-sm" href="{{ route('categories.create') }}"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <table class="table table-bordered table-striped mt-4">
                    <thead>
                    <tr>
                        <th width="80px">No</th>
                        <th>Category</th>
                        <th width="150px">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td><b> {{ $category->category }}</b></td>
                            <td>
                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">There are no data.</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>



            </div>
        </section>

    @endsection

@endauth
