<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Especialidade as EspecialidadeModel;

class Especialidade extends Controller
{
    public function listar(){
      
        $lista_especialidades = EspecialidadeModel::orderBy('descricao', 'asc')->paginate(10);
        
        
        return view('especialidade_listar', [
            'lista_especialidades' => $lista_especialidades
        ]);
    }
    
    public function adicionar(){
      
        return view('especialidade_adicionar');
  }
}