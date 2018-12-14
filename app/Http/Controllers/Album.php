<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Album extends Controller
{
    public function listar(){
    $usuario = [
        'nome'=> 'Italo',
        'sobrenome'=>'Azevedo'
    ];
    
    $usuarios = [
        ['nome' => 'vitor'],
        ['nome' => 'wellington'],
        ['nome' => 'ronaldo']
    ];
        
    return view('welcome', ['usuario'=>$usuario, 'lista_usuarios'=>$usuarios]);
    }
}
