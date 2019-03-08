<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Usuario as MedicoModel;

class Medico extends Controller
{
     public function listar(){
               
        $lista_medicos = MedicoModel::orderBy('id', 'asc')->paginate(50) ->where('id_funcao', '=', 1);
        return view('medico_listar', ['lista_medicos' => $lista_medicos]);
    }
    
     public function adicionar(Request $request, Medico $medico){
         $medico->id_funcao = 1;
         $medico->nome = $request->nome;
         $medico->email = $request->email;
         $medico->login = $request->login;
         $medico->senha = $request->senha;
         $medico->cpf = $request->cpf;
         $medico->adicionar();
         //https://blog.especializati.com.br/cadastrando-dados-no-laravel-mvc/
     }
}

