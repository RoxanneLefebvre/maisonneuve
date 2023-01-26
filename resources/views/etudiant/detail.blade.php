@extends('layouts.app')
@section('title', 'detail')
@section('content')




<div class="container">
<a href="{{ route('etudiant.index')}}" class="btn btn-outline-primary">retourne sur la page d'acceuil</a>
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">
            {{ $etudiant->nom }}
            </h1>
            <hr>
            <p>{{  $etudiant->id }}</p>
            <p>{{  $etudiant->adresse }}</p>
            <p>{{  $etudiant->phone }}</p>
            <p>{{  $etudiant->email }}</p>
            <p>{{  $etudiant->dateNaissance }}</p>
            <small>{{ $etudiant->villeParId->nom }}</small>

            <hr>
        </div>
    </div>
</div>
<div class="row text-center">
    <div class="col-6">
        <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-success">mettre a jour</a>
    </div>
    <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Effacer
        </button>
      
    </div>

</div>





<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteModalLabel">Effacer un Article</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        etes vous certain de vouloir effacer ce post.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route('etudiant.edit', $etudiant->id) }}" method="POST">
          @csrf
          @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

