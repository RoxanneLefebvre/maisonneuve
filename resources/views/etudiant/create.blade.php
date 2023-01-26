@extends('layouts.app')
@section('title', 'ajouter')
@section('content')




<div class="container">
    <a href="{{ route('etudiant.index')}}" class="btn btn-outline-primary">retourne sur la page d'acceuil</a>
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one">Ajouter un etudiant</h1>
        </div>
    </div>

 <hr>



 <div class="row justify-content-center">
    <div class="col-md-6 text-center">

        <form method="post">
            @csrf

            <div class="card">
                <div class="card-header">
                    formulaire
                </div>
                <div class="card-body">
                <div class="control-group col-12">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control">
                    </div>
                    <div class="control-group col-12">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" id="adresse" class="form-control">
                    </div>
                    <div class="control-group col-12">
                        <label for="phone">Telephone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="control-group col-12">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="control-group col-12">
                        <label for="dateNaissance">date de Naissance</label>
                        <input type="text" name="dateNaissance" id="dateNaissance" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ville_id">Ville</label>
                        <select class="form-control" id="ville_id" name="ville_id">
                            <option value="" selected>
                            choisisez une ville
                            </option>
                            @foreach($villes as $ville)
                            <option value="{{$ville->id}}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="save" class="btn btn-success">

                </div>
            </div>

        </form>

    </div>
</div>
@endsection

