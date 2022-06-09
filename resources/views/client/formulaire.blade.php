@extends('layouts.main')
@section('content')
    <h2 class="text-center text-primary p-3">ENREGISTRER UN CLIENT</h2>
    <h4 class="text-center p-2">Veuillez remplir ce formulaire SVP!</h4>
    <div class="container">
        <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_client.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row g-2">
                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">NOM</label>
                        <input type="text" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">PRENOM</label>
                        <input type="text" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">TELEPHONE</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">ADRESSE</label>
                        <input type="email" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                        <input type="email" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="container d-flex mt-3">
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
