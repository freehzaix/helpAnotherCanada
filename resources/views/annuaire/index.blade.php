@extends('layout')

@section('titlePage')
    Annuaire d'entreprise
@endsection

@section('contentPage')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="col">
                <h1 class="h3 mb-0 text-gray-800">@yield('titlePage')</h1>
            </div>
            <div class="col-3">
                <a href="{{ route('annuaire.create') }}" class="btn btn-primary btn-user btn-block mt-3">Créer un annuaire</a>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success"> {{ session('status') }} </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom d'entreprise</th>
                                    <th>Ville</th>
                                    <th>Pays</th>
                                    <th>Téléphone</th>
                                    <th>Status</th>
                                    <th>Logo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($annuaires as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->nom_entreprise }}</td>
                                        <td>{{ $row->ville }}</td>
                                        <td>{{ $row->pays }}</td>
                                        <td>{{ $row->telephone }}</td>
                                        <td>
                                            @if ($row->status)
                                                Approuvé
                                            @else
                                                En attente
                                            @endif
                                        </td>
                                        <td><img src="{{ $row->logo }}" height="30px" /></td>
                                        <td>
                                            <a href="/annuaire/{{ $row->id }}/show" class="btn btn-info">Modifier</a>
                                            @if (Auth::user()->role_id == 2)
                                                <a href="#" class="btn btn-danger">Supprimer</a>
                                            @endif
                                            @if (Auth::user()->role_id == 2 && $row->status == false)
                                                <a href="/annuaire/{{ $row->id }}/approuve"
                                                    class="btn btn-primary">Approuver</a>
                                            @endif
                                            @if (Auth::user()->role_id == 2 && $row->status == true)
                                                <a href="/annuaire/{{ $row->id }}/deapprouve"
                                                    class="btn btn-primary">Désapprouver</a>
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
@endsection
