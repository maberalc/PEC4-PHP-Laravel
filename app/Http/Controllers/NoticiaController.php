<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
  public function index()
  {
    $noticias = Noticia::orderBy('fecha_publicacion', 'desc')->take(5)->get();

    return view('index', compact('noticias'));
  }

  public function detail($id)
  {
    $noticia = Noticia::findOrFail($id);

    return view('noticia', compact('noticia'));
  }
}
