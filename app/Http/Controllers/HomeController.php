<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

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

      return view('index', [
          'productos' => $productos,
          'categorias'=> $categorias,
      ]);
    }
}
