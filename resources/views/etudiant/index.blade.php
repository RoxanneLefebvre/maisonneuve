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

        <div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Nom</th>
                    <th>Date d'inscription</th>
                </tr>
                @forelse($etudiants as $etudiant)
                <tr>
                    <td><a href="{{ route('etudiant.detail', $etudiant->id)}}">{{ $etudiant->nom}}</a></td>
                    <td>{{ $etudiant->created_at}}</td>
                
                </tr>
                @empty
                                    <td class="text-danger">Aucun etudiant trouver</td>
                                @endforelse
            </table>
            {{$etudiants}}
        </div>

    </div>
</div>
            
           
    </div>
</div> 







@endsection
    
