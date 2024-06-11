<style>
    .solution_cards_box .solution_card {
        background: #fff;
        box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
        0 5px 15px 0 rgba(37, 44, 97, 0.15);
        border-radius: 15px;
        transition: 0.7s;
    }

    .solution_cards_box .solution_card:hover {
        background: #309df0;
        color: #fff;
        transform: scale(1.1);
        z-index: 9;
    }
    .solution_cards_box .solution_card:hover .solu_title h3,
    .solution_cards_box .solution_card:hover .solu_description p {
        color: #fff;
    }

    .solution_cards_box .solution_card:hover .solu_description button {
        background: #fff !important;
        color: #309df0;
    }

    .solution_card .solu_title h3 {
        color: #212121;
        font-size: 1.3rem;
        margin-top: 13px;
        margin-bottom: 13px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .solution_card .solu_description p {
        font-size: 15px;
        margin-bottom: 15px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .solution_card .solu_description a {
        border: 0;
        border-radius: 15px;
        background: linear-gradient(
                140deg,
                #42c3ca 0%,
                #42c3ca 50%,
                #42c3cac7 75%
        ) !important;
        color: #fff;
        font-weight: 500;
        font-size: 1rem;
        padding: 5px 16px;
        text-decoration: none;
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
                        <h1>news</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">news</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

        <div class="row">   
                @forelse ($news as $new)
            <div class=" col-lg-4 col-md-4 col-sm-4 ">
                <div class="solution_cards_box mb-0">
                    <div class="solution_card mb-0">
                        <div class="hover_color_bubble"></div>
                        <div > <img src="{{ asset($new->image) }}"  class="img-fluid w-100 h-50 " alt="..."></div>
                        <div class="solu_title">
                            <h3>{{ $new->title }} </h3>
                        </div>
                        @php
                                $lastLetter = '';
                           @endphp
                           @if($lastLetter != $new->description)
                        <div class="solu_description">
                            <p>
                            @php
                                    $lastLetter = strip_tags($new->description);
                                 $string = $lastLetter;
                            if (strlen($string) > 150) {
                                $stringCut = substr($string, 0, 150);
                                $endPoint = strrpos($stringCut, ' ');
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);

                            }
                            echo $string;
                                @endphp
                                <br>
                                <b class=" text-decoration-none text-dark fw-bolder mr-4" >{{ $new->created_at }}</b>
                            </p>
                            <p>
                            
                            <form action="{{ route('news.destroy',$new->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('news.show',$new->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('news.edit',$new->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                            </p>
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
    </div>
    
</section>
@endsection
@endauth
