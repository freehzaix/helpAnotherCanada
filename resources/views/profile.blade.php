@extends('layout')

@section('titlePage')
    Profile
@endsection

@section('contentPage')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('titlePage')</h1>
            @if(session('status'))
                <div class="alert alert-success"> {{ session('status') }} </div>
            @endif
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <form class="user" action="{{ route('profile.post') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="nom" placeholder="Nom" value="{{ Auth::user()->nom }}">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="prenom" placeholder="Prénom" value="{{ Auth::user()->prenom }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email" placeholder="Adresse mail" value="{{ Auth::user()->email }}" disabled>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Mettre à jour les informations
                            </button>
                            <hr>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
