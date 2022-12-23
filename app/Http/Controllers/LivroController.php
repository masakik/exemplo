<?php

namespace App\Http\Controllers;

class LivroController extends Controller
{
    public function index()
    {
        //bvvvjvj
        return view('livros.index');
    }

    public function show($isbn)
    {
        if ($isbn == '9780195106817') {
            $livro = "Quincas Borba - Machado de Assis";
        } else {
            $livro = "Livro não identificado";
        }
        return view('livros.show', [
            'livro' => $livro,
        ]);
    }
}
