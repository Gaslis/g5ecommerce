<?php
namespace App\Http\Controllers;

use App\Category;
use App\Product;
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
      $categoriaXcat = Category::find($id);
      $productosXcat = $categoriaXcat->products();
      return view('products.listadoXcategoria', compact('categoriaXcat','productosXcat'));
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
