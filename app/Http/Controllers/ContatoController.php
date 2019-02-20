<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object) ["nome"=>"Maria", "tel"=>"33139090"],
            (object) ["nome"=>"Pedro", "tel"=>"88990011"]
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        dd($req->all());
        return "Este é o Criar do ContatoController!";
    }

    public function editar()
    {
        return "Este é o Editar do ContatoController!";
    }
}
