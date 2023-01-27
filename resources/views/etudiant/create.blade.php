@extends('layouts.app')
@section('title', 'ajouter')
@section('content')




<div class="container">

    <div class="row mt-5">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one">Ajouter un etudiant</h1>
        </div>
    </div>





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
                            <option value="" selected disabled>
                            choisisez une ville
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


<div class="container">
<br>  <h1 class="text-center">Inscription</h1>
<hr>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	
	<form method="POST">
    @csrf
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
         
                        <input type="text" name="nom" id="nom" class="form-control">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
         
                        <input type="text" name="email" id="email" class="form-control">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
                        <input type="text" name="phone" id="phone" class="form-control">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" id="ville_id" name="ville_id">
                            <option value="" selected disabled>
                            choisisez une ville
                            </option>
                            @foreach($villes as $ville)
                            <option value="{{$ville->id}}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
	</div> <!-- form-group end.// -->
    <div class="row mb-4 justify-content-center">
                    <input type="submit" value="Envoyer" class="btn btn-success">
                    </div>

                                                                      
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->





@endsection

