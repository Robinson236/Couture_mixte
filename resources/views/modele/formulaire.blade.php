@extends('layouts.main')
@section('content')

<h2 class="text-center text-primary p-3">ENREGISTRER UN MODELE</h2>
<h4 class="text-center p-2">Veuillez remplir ce formulaire SVP!</h4>
<div class="container">
    <div class="col-md-12 mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom du client</label>
        <select  class="form-control" name="clients_id" id="">
            @foreach ($clients as $client)
            <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
            @endforeach
        </select>
    </div>
    <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_modele.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom du modele</label>
            <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       
        <div class="container d-flex">
            <div>
                <button type="submit" class="btn btn-info w-100">Enregistrer</button>
            </div> &nbsp;&nbsp;&nbsp;
            <div>
                <button type="reset" class="btn btn-primary w-100">Annuler</button>
            </div>
        </div>
    </form>
</div>
@endsection

