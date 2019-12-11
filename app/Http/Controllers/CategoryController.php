<?php
namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Carrito;
use Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

      $categorias = Category::all();
      // dd($categorias->productos);

      return view('index',[
        'categorias'=>$categorias
      ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
      if(Auth::user()) {
      $carts = Carrito::where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
    } else {
      $carts = null;
    }
      $cat = Category::find($id);
      return view('products.listadoXcategoria', compact('cat','carts'));
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
