@extends('layouts.app')
@section('title', 'mettre a jour')
@section('content')




<!-- <div class="container">
    <a href="{{ route('etudiant.index')}}" class="btn btn-outline-primary">retourne sur la page d'acceuil</a>
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one">mettre a jour un etudiant</h1>
        </div>
    </div>

 <hr>



 <div class="row justify-content-center">
    <div class="col-md-6 text-center">

        <form method="post">
            @csrf
            @method('put')

            <div class="card">
                <div class="card-header">
                    formulaire
                </div>
                <div class="card-body">
                    <div class="control-group col-12">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="{{ $etudiant->nom }}">
                    </div>
                    <div class="control-group col-12">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $etudiant->adresse }}">
                    </div>
                    <div class="control-group col-12">
                        <label for="phone">Telephone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ $etudiant->phone }}">
                    </div>
                    <div class="control-group col-12">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $etudiant->email }}">
                    </div>
                    <div class="control-group col-12">
                        <label for="dateNaissance">date de Naissance</label>
                        <input type="text" name="dateNaissance" id="dateNaissance" class="form-control" value="{{ $etudiant->dateNaissance }}">
                    </div>


                    <div class="form-group">
                        <label for="ville_id">Ville</label>
                        <select class="form-control" id="ville_id" name="ville_id">
                            <option value="{{ $etudiant->villeParId->nom }}" selected>
                            {{ $etudiant->villeParId->nom }}
                            </option>
                            @foreach($villes as $ville)
                            <option value="{{$ville->id}}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>
                <div class="card-footer">
                    <input type="submit" value="mettre a jour" class="btn btn-success">

                </div>
            </div>

        </form>

    </div>
</div> -->



<div class="container">

    <div class="row mt-5">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one">Modifier la fiche d'un eleve</h1>
        </div>
    </div>





 <div class="row justify-content-center">
    <div class="col-md-6 text-center">

        <form method="post">
            @csrf
            @method('put')

            <div class="card">
                <div class="card-header">
                    formulaire
                </div>
                <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif
                <div class="form-group mb-3">
                        
                        <input type="text" placeholder="Nom" name="nom" id="nom" class="form-control" value="{{ $etudiant->nom }}">
                        @if ($errors->has('nom'))
                                    <div class="text-danger mt-2">
                                        {{$errors->first('nom')}}
                                    </div>
                                @endif
                    </div>
                    <div class="form-group mb-3">
                        
                        <input type="text" placeholder="Adresse" name="adresse" id="adresse" class="form-control" value="{{ $etudiant->adresse }}">
                        @if ($errors->has('adresse'))
                                    <div class="text-danger mt-2">
                                        {{$errors->first('adresse')}}
                                    </div>
                                @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Telephone" name="phone" id="phone" class="form-control" value="{{ $etudiant->phone }}">
                        @if ($errors->has('telephone'))
                                    <div class="text-danger mt-2">
                                        {{$errors->first('telephone')}}
                                    </div>
                                @endif
                    </div>
                    <div class="form-group mb-3">
                       
                        <input type="text" placeholder="Email" name="email" id="email" class="form-control" value="{{ $etudiant->email }}">
                        @if ($errors->has('email'))
                                    <div class="text-danger mt-2">
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                    </div>
                    <div class="form-group mb-3">
                        
                        <input type="text" placeholder="Date de Naissance" name="dateNaissance" id="dateNaissance" class="form-control" value="{{ $etudiant->dateNaissance }}">
                        @if ($errors->has('dateNaissance'))
                                    <div class="text-danger mt-2">
                                        {{$errors->first('dateNaissance')}}
                                    </div>
                                @endif
                    </div>
                    <!-- <div class="form-group mb-3">
                        
                        <select class="form-control" id="ville_id" name="ville_id">
                        <option value="{{ $etudiant->villeParId->nom }}" selected>
                        {{ $etudiant->villeParId->nom }}
                            </option>
                            @foreach($villes as $ville)
                            <option value="{{$ville->id}}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('ville_id'))
                                    <div class="text-danger mt-2">
                                        {{$errors->first('ville_id')}}
                                    </div>
                                @endif
                    </div> -->



                    <div class="form-group">
                        <label for="ville_id">Ville</label>
                        <select class="form-control" id="ville_id" name="ville_id">
                            <option value="{{$ville->id}}" selected>
                            {{ $etudiant->villeParId->nom }}
                            </option>
                            @foreach($villes as $ville)
                            <option value="{{$ville->id}}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Envoyer" class="btn btn-success">

                </div>
            </div>

        </form>

    </div>
</div>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">















@endsection

