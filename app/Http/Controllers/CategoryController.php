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
      $cat = Category::find($id);
      $productosXcat = $cat->products();
      return view('products.listadoXcategoria', compact('cat','productosXcat'));
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
