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
    
     public function adicionar(){
         
        $adicionar = new Medico();
        $adicionar->id_funcao = 1;
        $adicionar->nome = $request->nome;
        $adicionar->email = $request->email;
        $adicionar->login = $request->login;
        $adicionar->senha = $request->senha;
        $adicionar->cpf = $request->cpf;
        $adicionar->cadastrar();
        /*/ $medico_adicionar =  $query = "INSERT INTO usuarios (id_funcao, nome, email, login, senha, cpf) 
        VALUES (1, :nome, :email, :login, :senha, :cpf)";/*/
         return view('medico_adicionar');
     }
}

