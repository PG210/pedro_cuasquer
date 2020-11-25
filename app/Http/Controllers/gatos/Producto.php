<?php

namespace App\Http\Controllers\gatos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Producto extends Controller
{ 
    public function index(){
        $mensaje ='Arco para gato';
        $m ='Casa para gato';
        $m1 ='Purina Nutre Cat';
        $m2 ='Purina Cat';
        $m3 ='Comedor de madera';
        $m4 ='Juguete para gato';
        $res = ['código: 001','precio: 14.000'];
        $dat = ['código: 003','precio: 80.000'];
        $dat1 = ['código: 005','precio: 70.000'];
        $dat2 = ['código: 009','precio: 60.000'];
        $dat3 = ['código: 011','precio: 45.000'];
        $dat4 = ['código: 012','precio: 12.000'];
         return view('gato')
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
public function contac(){
    return view('contacto');
}

}
