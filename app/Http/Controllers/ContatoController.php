<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    public function index ()
    {
        $contatos = [
               (object) ["nome"=>"Maria","telefone"=>"456455"],
               (object) ["nome"=>"Pedro","telefone"=>"534534"]
                

        ];

        $contato = new \App\Contato();
        $con = $contato->lista();
        dd($con->nome);


        return view('contato.index',compact('contatos'));
    }

    public function criar (Request $req)
    {
        dd($req-> all());
        return "Esse é o criar do contatocontroller";
    }

    public function editar ()
    {

        return "Esse é o editar do contatocontroller";
    }
}
