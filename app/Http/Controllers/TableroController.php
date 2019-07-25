<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableroController extends Controller
{
    public function index(Request $request)
    {

          //dd($request->query('titulo'));


        $titulo = "Curso Platzi Laravel from controller b ";
        return view('layout',[
          'titulo' => $titulo
        ]);
    }

  }
