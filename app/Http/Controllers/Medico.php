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
         
         
         return view('medico_adicionar');
     }
}

