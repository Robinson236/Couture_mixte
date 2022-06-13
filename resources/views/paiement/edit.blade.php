@extends('layouts.main')
@section('content')
    <div class="container">
        <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire du paiement</h2>
        <h5 class="text-center mb-3">Veuillez insérer vos données ci-dessous.</h5>
        <form method="POST" class="shadow p-3 mb-5 bg-body rounded"
            action="{{ route('gestion_paiement.update', [$finds->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex">
                <div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="text" class="form-control" value="{{ $finds->id }}" name="id"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Total</label>
                        <input type="text" class="form-control" value="{{ $finds->total }}" name="total"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Avance</label>
                        <input type="text" class="form-control" name="avance" value="{{ $finds->avance }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Reste</label>
                        <input type="text" class="form-control" name="reste" value="{{ $finds->reste }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="container d-flex">
                        <div>
                            <button type="submit" class="btn btn-success w-100">Modifier</button>
                        </div> &nbsp;&nbsp;&nbsp;
                    </div>
        </form>
    </div>
</div>
    </div>
@endsection
