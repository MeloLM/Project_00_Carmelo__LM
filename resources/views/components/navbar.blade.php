
  <nav class="navbar navbar-expand-lg sticky-top bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <i class="bi bi-house-door-fill text-white m-2 fs-4"></i>
        House Point</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vendite
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('sell.index')}}">Vedi pagina</a></li>
              <li><a class="dropdown-item" href="{{route('sell.create')}}">Crea vendita</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Aste
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('trade.index')}}">Vedi pagina</a></li>
              <li><a class="dropdown-item" href="{{route('trade.create')}}">Crea Asta</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('contactUs')}}">Contattaci</a>
          </li>
        </ul>


        <ul class="navbar-nav ms-5 me-4 mb-2 mb-lg-0 ">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li class="dropdown-divisor"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" >Esci</a></li>
              <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto Guest
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>      
            </ul>
          </li>
          @endauth
        </ul>


      </div>
    </div>
  </nav>
  