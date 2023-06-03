<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
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
      </div>
      
      <h1>{{ $noticia->titulo }}</h1>
      <img width="640" height="480" style="object-fit: cover;" src="{{ $noticia->imagen }}" alt="{{ $noticia->titulo }}">
      <p>Autor: {{ $noticia->autor }}</p>
      <p>Fecha de publicación: {{ $noticia->fecha_publicacion }}</p>
      <p>Contenido: {{ $noticia->contenido }}</p>
    </body>
</html>
