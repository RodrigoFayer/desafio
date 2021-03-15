@extends('admin.layouts.app')

@section('content')
<div class="row"><h2 class="mb-3">Dashboard</h2></div>
<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card card-primary shadow">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fab fa-galactic-republic"></i> Planetas Salvos
                </h3>
            </div>
            <div class="card-body">
                <h3>{{$planets}} Planetas Salvos</h3>
                <div class="text-right">
                    <a class="btn btn-primary" href="{{ route('savesPlanets.index') }}">Ir para Planetas Salvos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="card card-primary shadow">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="nav-icon fas fa-space-shuttle"></i> Naves Salvas
                </h3>
            </div>
            <div class="card-body">
                <h3>{{$starships}} Naves Salvas</h3>
                <div class="text-right">

                    <a class="btn btn-primary" href="{{ route('savesStarships.index') }}">Ir para Naves Salvas</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
