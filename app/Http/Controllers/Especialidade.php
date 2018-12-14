<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Especialidade extends Controller
{
    public function listar(){
      
    return view('especialidade.listar');
  }
    
    public function adicionar(){
      
    return view('especialidade.adicionar');
  }
}