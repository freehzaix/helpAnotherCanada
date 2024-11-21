@extends('layout')

@section('titlePage')
    Ajouter un annuaire d'entreprise
@endsection

@section('contentPage')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="col">
                <h1 class="h3 mb-0 text-gray-800">@yield('titlePage')</h1>
            </div>
            <div class="col-3">
               
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
                            <form class="user" action="{{ route('annuaire.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nom_entreprise" placeholder="Nom d'entreprise">
                                </div>

                                <div class="form-group">
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Description..."></textarea>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" name="ville" placeholder="Ville">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="pays" placeholder="Pays">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" name="telephone" placeholder="Téléphone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="logo" placeholder="URL du logo">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-block">
                                    Ajouter l'entreprise
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
