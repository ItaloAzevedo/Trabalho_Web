<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Medico extends Controller
{
     public function listar(){
         
         
         return view('medico.listar');
     }
     public function adicionar(){
         
         
         return view('medico.adicionar');
     }
}
