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
    // ->INNER JOIN('categories','');
    public function show($id)
    {
      $categoriaXcat = Category::find($id);
      $productosXcat = Product::where('categoria_id','like','%'.$id.'%')->get();
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
