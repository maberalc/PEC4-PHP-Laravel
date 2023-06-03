<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
  public function index($page)
  {
    $noticias = Noticia::skip(($page - 1) * 10)->take(10)->get();

    $noticias = $noticias->map(function ($noticia) {
      unset($noticia->contenido);
      unset($noticia->imagen);
      unset($noticia->autor);
      unset($noticia->created_at);
      unset($noticia->updated_at);
      return $noticia;
    });

    return response()->json($noticias);
  }

  public function detail($id)
  {
    $noticia = Noticia::findOrFail($id);

    return response()->json($noticia);
  }
}
