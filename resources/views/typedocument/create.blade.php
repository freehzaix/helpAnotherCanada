@extends('layout')

@section('titlePage')
    Ajouter un document
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
                            <form method="POST" action="{{ route('document.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nom_fichier">Nom du fichier</label>
                                            <input type="text" class="form-control" name="nom_fichier" id="nom_fichier"
                                                placeholder="Donnez un nom au fichier">
                                        </div>
            
                                        <div class="form-group">
                                            <label for="fichier_scanner">Fichier scanné</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="fichier_scanner"
                                                        id="fichier_scanner">
                                                    <label class="custom-file-label" for="fichier_scanner">Choisir un doculent
                                                        PDF</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Enregistrer</button>
                                </div>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
