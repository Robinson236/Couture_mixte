@extends('layouts.main')

@section('content')

<h1 class="text-center text-primary p-3">LISTE DE MESURES </h1>
<div class="container">
    <div class="d-flex justify-content-end mb-3 p-3">
        <a href="{{route('gestion_client.create') }}" class="btn btn-info"> Ajouter un nouvel personnel</a>
    </div>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">tour_poitrine</th>
                <th scope="col">tour_manche</th>
                <th scope="col">tour_cuisse</th>
                <th scope="col">tour_genoux</th>
                <th scope="col">tour_bras</th>
                <th scope="col">tour_poignet</th>
                <th scope="col">tour_bassin</th>
                <th scope="col">tour_mollet</th>
                <th scope="col">tour_cheville</th>
                <th scope="col">hauteur_poitrine</th>
                <th scope="col">hauteur_pointe_sein</th>
                <th scope="col">hauteur_taille_sol</th>
                <th scope="col">longueur_epaule</th>
                <th scope="col">longueur_milieu_dos</th>
                <th scope="col">longueur_entrejambe_sol</th>
                <th scope="col">carrure_devant</th>
                <th scope="col">hauteur_pointe_sein</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->tour_poitrine}}</td>
                <td>{{$client->tour_manche}}</td>
                <td>{{$client->tour_cuisse}}</td>
                <td>{{$client->tour_genoux}}</td>
                <td>{{$client->tour_bras}}</td>
                <td>{{$client->tour_poignet}}</td>
                <td>{{$client->tour_bassin}}</td>
                <td>{{$client->tour_mollet}}</td>
                <td>{{$client->tour_cheville}}</td>
                <td>{{$client->hauteur_poitrine}}</td>
                <td>{{$client->hauteur_pointe_sein}}</td>
                <td>{{$client->hauteur_taille_sol}}</td>
                <td>{{$client->longueur_epaule}}</td>
                <td>{{$client->longueur_milieu_dos}}</td>
                <td>{{$client->longueur_entrejambe_sol}}</td>
                <td>{{$client->carrure_devant}}</td>
                <td>{{$client->hauteur_pointe_sein}}</td>
                <td> <a class="button" href="{{route('gestion_client.show', [$client->id]) }}"><img src="{{ asset('image/more_info_50px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_client.edit', [$client->id]) }}"><img src="{{ asset('image/pencil_64px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_client/'.$client->id) }}"><img src="{{ asset('image/delete_trash_24px.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
