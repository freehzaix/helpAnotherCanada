@extends('layout')

@section('titlePage')
    Document
@endsection

@section('contentPage')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="col">
                <h1 class="h3 mb-0 text-gray-800">@yield('titlePage')</h1>
            </div>
            <div class="col-3">
                <a href="{{ route('document.create') }}" class="btn btn-primary btn-user btn-block mt-3">Ajouter un document</a>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="col">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="card shadow mb-4">
                        <!-- Card Body -->
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success"> {{ session('status') }} </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger"> {{ session('error') }} </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom du fichier</th>
                                        <th>Date d'ajout</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($typedocuments as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->nom_fichier }}</td>
                                            <td>{{ $row->created_at->locale('fr')->diffForHumans() }}</td>
                                            <td>
                                                <a href="/document/{{ $row->id }}/show" target="_blank" class="btn btn-info">Afficher</a>
                                                @if (Auth::user()->role_id == 2)
                                                    <a href="/document/{{ $row->id }}/delete" class="btn btn-danger">Supprimer</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
