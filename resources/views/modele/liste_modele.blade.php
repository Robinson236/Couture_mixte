@extends('layouts.main')

@section('content')

<h1 class="text-center text-primary p-3">LISTE DES MODELES </h1>
<div class="container">
    <div class="d-flex justify-content-end mb-3 p-3">
        <a href="{{route('gestion_modele.create') }}" class="btn btn-info"> Ajouter un modele</a>
    </div>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">PHOTO</th>
                <th scope="col">DETAIL</th>
                <th scope="col">MODIFIER</th>
                <th scope="col">SUPPRIMER</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modeles as $modele)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->nom}}</td>
                <td>{{$client->photo}}</td>
                <td>{{$client->detail}}</td>
                <td>{{$client->modifier}}</td>
                <td>{{$client->supprimer}}</td>
                <td><img src="{{ asset('image').'/'.$modeles->photo }}" style="width: 25%" alt=""></td>
                <td> <a class="button" href="{{route('gestion_client.show', [$client->id]) }}"><img src="{{ asset('image/more_info_50px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_client.edit', [$client->id]) }}"><img src="{{ asset('image/pencil_64px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_client/'.$client->id) }}"><img src="{{ asset('image/delete_trash_24px.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>
@endsection