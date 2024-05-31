@auth
    @extends('layouts.app-master')

    @section('content')
        <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contacts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contacts</li>
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
            <form class="float-left" action="{{ route('contacts.search') }}" method="GET">
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
           </div>
    </div>
    <table class="table table-bordered table-striped mt-4">
        <thead>
        <tr>
            <th width="80px">No</th>
            <th>Message</th>
            <th width="150px">Action</th>
        </tr>
        </thead>

        <tbody>
    @forelse ($contacts as $contact)
        <tr>
            <td>{{ ++$i }}</td>
            <td><b>Name:</b>{{ $contact->name }}<br><b>Email:</b> {{ $contact->email}}<br><b>Subject:</b>{{ $contact->subject }}<br><b>Message:</b>{{ $contact->message }}</td>
            <td>
                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
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

        {!! $contacts->withQueryString()->links('pagination::bootstrap-5') !!}

</div>
        </section>

    @endsection

@endauth
