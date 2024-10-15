<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagemController extends Controller
{
    public function index(){
        return view('imagem.index', ['imagens' => Imagem::all()]);
    }
}
