<?php
namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
      // dd(Category::all());
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

    // La idea era mostrar por categoria
    public function show($id)
    {
      $categoria = Category::find($id);
      $productos = Product::all();
      return view('products.listadoXcategoria', compact('categoria','productos'));
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
