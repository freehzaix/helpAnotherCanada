@extends('layout')

@section('titlePage')
    Tableau de bord
@endsection

@section('contentPage')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('titlePage')</h1>
        </div>
        <!-- Content Row -->
        <div class="row">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <p>
                            <h4>Total des membres</h4>
                            <a href="#">{{ $nbMembre }}</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <p>
                            <h4>Total des administrateurs</h4>
                            <a href="#">{{ $nbConseil }}</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <p>
                            <h4>Total des documents</h4>
                            <a href="#">{{ $nbDocument }}</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <p>
                            <h4>Total des webinaires</h4>
                            <a href="#">{{ $nbWebinaire }}</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
