<link type="text/css" rel="stylesheet" href="{{ asset('css/top.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/normalize.css') }}">


<header>
    <div class="container">
      <a href="{{  route('index') }}"><img src="../img/Notas.png" alt="logo" class="logo" ></a>
      
      <nav>
        <ul>
    
          <li><a href="{{ route('materia.index') }}">Materias</a></li>
          <li><a href="{{ route('notas') }}">Notas</a></li>
          <li><a href="#">Semestre</a></li>
          <li><a href="{{ route('faltante') }}">Cuanto te falta</a></li>
          <li><a href="#">About</a></li>
          @guest
        <li><a href="{{ route('login') }}">Log in</a></li>
        @else 
        <li>
            <a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Log Out</a>
        </li>
        @endguest
        </ul>
      </nav>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
</header>
