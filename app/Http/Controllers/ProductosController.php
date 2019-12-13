<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
  public function listar()
  {
    $productos = Producto::paginate(12);
    return view("productos", compact("productos"));
  }
}
