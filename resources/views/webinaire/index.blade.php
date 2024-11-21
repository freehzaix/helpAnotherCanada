@extends('layout')

@section('titlePage')
    Nos Webinaires
@endsection

@section('contentPage')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="col">
                <h1 class="h3 mb-0 text-gray-800">@yield('titlePage')</h1>
            </div>
            <div class="col-3">
                @if (Auth::user()->role->id == 2)
                    <a href="{{ route('webinaire.create') }}" class="btn btn-primary btn-user btn-block mt-3">Créer un Webinaire</a>
                @endif
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">

            @foreach($webinaires as $row)
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-image">
                                <img src="./storage/{{ $row->image_webinaire }}" width="320px" alt="">
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h2>{{ $row->designation }}</h2>
                                <p>{{ $row->description }}</p>
                                <a href="{{ $row->url_webinaire }}" class="btn btn-primary" target="_blank">Participer</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
