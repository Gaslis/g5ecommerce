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
      // $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id); estaba asi, pero ale saco all, anda parece
      if(Auth::user()) {
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
    } else {
      $carts = null;
    }
      $categorias = Category::all();
      $productos = Product::paginate(8);;


      return view('index', [
          'productos' => $productos,
          'categorias'=> $categorias,
          'carts'     => $carts,
      ]);
    }
}
