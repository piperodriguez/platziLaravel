<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableroController extends Controller
{
    public function index()
    {
        $titulo = "Curso Platzi Laravel from controller";
        return view('layout',[
          'titulo' => $titulo
        ]);
    }

  }
