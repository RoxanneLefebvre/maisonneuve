@extends('layouts.app')
@section('title', 'detail')
@section('content')




<div class="container pt-5">

<div class="row mb-5 justify-content-center">
                <div class="col-8">
                    <div class="card px-2">
                      <h1>{{ $etudiant->nom }}</h1>
                        <div class="card-header p-3">
                            <p><strong>Id: </strong> {{  $etudiant->id }}</p>
                            <p><strong>Adresse: </strong> {{  $etudiant->adresse }}</p>
                            <p><strong>Telephone: </strong> {{  $etudiant->phone }}</p>
                            <p><strong>Email: </strong> {{  $etudiant->email }}</p>
                            <p><strong>Date de Naissance: </strong>{{  $etudiant->dateNaissance }}</p>
                            <p><strong>Ville: </strong> {{ $etudiant->villeParId->nom }}</p>
                            
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
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
        Etes vous certain de vouloir effacer cet eleve?
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

