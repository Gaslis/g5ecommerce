<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Carrito;
use Auth;


class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }


    public function index()
    {
      $categorias = Category::all();
      $productos = Product::paginate(8);;
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);

      return view('index', [
          'productos' => $productos,
          'categorias'=> $categorias,
          'carts'     => $carts,
      ]);
    }
}
