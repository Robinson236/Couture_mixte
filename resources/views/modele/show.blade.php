@extends('layouts.main')
@section('content')
    <h1 class="text-center"><strong style="color: black">Détail des modeles {{ $finds->id }}</strong></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage') . '/' . $finds->photo }}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"> Détail du modele</h5>
                    <p>Nom du modele : <strong style="color: red"> {{ $finds->nom }} </strong></p>
                    <a href="{{ route('gestion_modele.index') }}" class="btn btn-primary">OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection
