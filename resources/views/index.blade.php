<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Noticiario Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>
      ul {
        list-style: none;
      }
      main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
    </style>
      
  </head>
    <body>
      <div>
        @if (Route::has('login'))
          <nav>
            <a href="{{route('home')}}">Home</a>
            @auth
              <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
              <a href="{{ route('login') }}">Log in</a>

              @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
              @endif
            @endauth
            <a href="{{route('api_noticias', 1)}}">API_Noticias</a>
            <a href="{{route('api_noticia', 1)}}">API_Noticia</a>
          </nav>
        @endif
      <div>
        
      <main>
      <h1>Noticiario</h1>
        <div>
          <ul>
            @foreach($noticias as $noticia)
              <li>
                <h2><a href="{{ route('noticia', $noticia->id) }}">{{ $noticia->titulo }}</a></h2>
                <img width="640" height="480" style="object-fit: cover;" src="{{ $noticia->imagen }}" alt="{{ $noticia->titulo }}">
                <p>Fecha de publicación: {{ $noticia->fecha_publicacion }}</p>
              </li>
            @endforeach
          </ul>
        <div>
      </main>

      <div>
        <div>
          Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
      </div>
    </div>
  </body>
</html>
