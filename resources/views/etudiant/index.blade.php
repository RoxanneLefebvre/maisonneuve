@extends('layouts.app')
@section('title', 'liste des etudiants')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">
            College de {{ config('app.name')}}
            </h1>
            <hr>
            <div class="row">
                <div class="col-12">
                    
                    <p>Liste de tout les etudiant presentement inscrit</p>
                </div>
              
            </div>
            <hr>
        </div>

            <div class="row mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <p>Liste des Etudiants

                            </p>
                        </div>
                        <div class="card-body">
                            <ul>
                                @forelse($etudiants as $etudiant)
                                    <li><a href="{{ route('etudiant.detail', $etudiant->id)}}">{{ $etudiant->nom }}</a></li>
                                    @empty
                                    <li class="text-danger">Aucun etudiant trouver</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
           
    </div>
</div> 





@endsection
    
