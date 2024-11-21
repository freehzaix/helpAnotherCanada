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
                            <form class="user" action="{{ route('annuaire.update') }}" method="POST">
                                @csrf
                                <div class="">
                                    <input type="text" name="id" value="{{ $annuaire->id }}" style="display: none;">
                                </div>
                                <div class="form-group">
                                    <label for="nom_entreprise">Nom de l'entreprise</label>
                                    <input type="text" class="form-control" name="nom_entreprise" id="nom_entreprise" value="{{ $annuaire->nom_entreprise }}" placeholder="Nom d'entreprise">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description de l'entreprise</label>
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Description...">{{ $annuaire->description }}</textarea>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="ville">Ville</label>
                                        <input type="text" class="form-control" name="ville" value="{{ $annuaire->ville }}" placeholder="Ville">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="pays">Pays</label>
                                        <input type="text" class="form-control" name="pays" value="{{ $annuaire->pays }}" placeholder="Pays">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="telephone">Téléphone</label>
                                        <input type="text" class="form-control" name="telephone" value="{{ $annuaire->telephone }}" placeholder="Téléphone">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="logo">Logo</label>
                                        <input type="text" class="form-control" name="logo" value="{{ $annuaire->logo }}" placeholder="URL du logo">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-block">
                                    Enregistrer les modifications
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
