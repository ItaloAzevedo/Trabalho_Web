<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Consulta extends Controller
{
       public function listar(){
         
         
         return view('consulta_listar');
     }
     public function adicionar(){
         
         
         return view('consulta_adicionar');
     }
}
