<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}} : @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    
</head>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="{{ route('etudiant.index')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('etudiant.create')}}">inscription</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    class=" text-center bg-image"
    style="
      height: 172px;
      background-image: url('/img/headerMaisonneuve.png');
    "
  >
    
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Blog Maisonneuve</h1>
          <h4 class="mb-3">bienvenue!</h4>
         
      
        </div>
      </div>
    </div>

  <!-- Background image -->
</header>
<body>
    @yield('content')
    
</body>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</html>





