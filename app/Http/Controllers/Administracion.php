<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administracion extends Controller
{
    public function index(){//retorna la vista o interactua con el modelo de datos
        return view('principal');//vista principal
    }
    public function prod_perro(){//retorna la vista o interactua con el modelo de datos
       $mensaje ='Kanu Nativo Wild adulto';
       $m ='Purina Campeón';
       $m1 ='Dog Chow';
       $m2 ='Casita Madera';
       $m3 ='Correa Elmo';
       $m4 ='Juguete para perro';
       $res = ['código: 123','precio: 110.000'];
       $dat = ['código: 156','precio: 75.000'];
       $dat1 = ['código: 158','precio: 50.000'];
       $dat2 = ['código: 159','precio: 120.000'];
       $dat3 = ['código: 170','precio: 12.000'];
       $dat4 = ['código: 180','precio: 25.000'];
        return view('perro')
        ->with('msj', $mensaje)
        ->with('mensaje', $m)
        ->with('m1', $m1)
        ->with('m2', $m2)
        ->with('m3', $m3)
        ->with('m4', $m4)
        ->with('r', $res)
        ->with('dato', $dat)
        ->with('dat1', $dat1)
        ->with('dat2', $dat2)
        ->with('dat3', $dat3)
        ->with('dat4', $dat4);
    }
}
