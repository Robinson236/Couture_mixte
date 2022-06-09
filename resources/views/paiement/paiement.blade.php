@extends('layouts.main')

@section('content')

<h1 class="text-center text-primary p-3">LISTE DES MODELES </h1>
<div class="container">
    <div class="d-flex justify-content-end mb-3 p-3">
        <a href="{{route('gestion_client.create') }}" class="btn btn-info"> Ajouter un nouvel personnel</a>
    </div>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TOTAL A PAYER</th>
                <th scope="col">AVANCE</th>
                <th scope="col">RESTE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->total}}</td>
                <td>{{$client->avance}}</td>
                <td>{{$client->avance}}</td>
                <td><img src="{{ asset('image').'/'.$modeles->photo }}" style="width: 25%" alt=""></td>
                <td> <a class="button" href="{{route('gestion_client.show', [$client->id]) }}"><img src="{{ asset('image/more_info_50px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_client.edit', [$client->id]) }}"><img src="{{ asset('image/pencil_64px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_client/'.$client->id) }}"><img src="{{ asset('image/delete_trash_24px.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
