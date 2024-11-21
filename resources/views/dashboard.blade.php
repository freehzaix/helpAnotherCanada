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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium corrupti, nihil, dolor
                            soluta impedit
                            perferendis odit maiores inventore quo voluptas nobis in. Minima nostrum necessitatibus
                            dignissimos!
                            Temporibus suscipit neque tempore.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
