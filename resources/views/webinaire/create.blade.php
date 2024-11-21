@extends('layout')

@section('titlePage')
    Ajouter un webinaire
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
                    <a href="{{ route('webinaire.create') }}" class="btn btn-primary btn-user btn-block mt-3">Créer un webinaire</a>
                @endif
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <p>
                            @if(session('status'))
                                <div class="alert alert-success"> {{ session('status') }} </div>
                            @endif
                            <form class="user" action="{{ route('webinaire.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="designation" placeholder="Désignation">
                                </div>

                                <div class="form-group">
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Description..."></textarea>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="tarif" placeholder="Tarif">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control" name="date_debut" placeholder="Date de début">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" name="date_fin" placeholder="Date de fin">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="time" class="form-control" name="heure_debut" placeholder="Heure de debut">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="time" class="form-control" name="heure_fin" placeholder="Heure de fin">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image_webinaire" placeholder="image du webinaire">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="url_webinaire" placeholder="URL du webinaire">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">
                                    Ajouter le webinaire
                                </button>
                                <hr>
                                
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
