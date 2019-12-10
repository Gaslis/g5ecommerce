<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Carrito;

class ProductsController extends Controller
{
  public function index()
  {   $categorias = Category::all();

      $productos = Product::paginate(10);
      // return view('index', [
      //
      //     'productos' => $productos,
      //     'categorias'=> $categorias
      // ]);
      return view('products.listadoDeProductosAdmin')->with('productos',$productos);
  }

  public function create()
  {
    $categorias = Category::all();
    return view('products.agregrarProducto')->with('categorias',$categorias);

  }

  public function save(Request $request)
  {
    $reglas = [
        'nombre' => 'required',
        'precio' => 'required',
        'descripcion' => 'required',
        'poster' =>'file|nullable'
    ];
    $mensajes = [
        'nombre.required' => 'Este campo :attribute es requerido...',
        'required' => 'Este campo :attribute es requerido...',
        'numeric' => 'Ingrese en este campo :attribute sólo números...',
        'date' => 'Debe indicar una fecha...'
    ];
      $this->validate($request,$reglas,$mensajes);

      $product = new Product($request->all());

      $ruta =  $request->file('poster')->store('public');
      $nombreArchivo = basename($ruta);
      $product->poster = $nombreArchivo;

      $product->save();
      return redirect('/administrarProducto');
    }

  public function show($id)
  {
    $producto = Product::find($id);
    $categorias = Category::all();
    // return view('products.detalleProducto')->with('producto',$producto);
    return view('products.detalleProducto', compact('producto','categorias'));
  }

  public function edit($id)
  {
    $productoEditar = Product::find($id);
    $categorias = Category::all();
    $categoriaEditada = Category::find($productoEditar->categoria_id);
    return view('products.editarProducto', compact('productoEditar', 'categorias','categoriaEditada'));
  }

  public function update(Request $request, $id)
  {
    $productoEditar = Product::find($id);
    $productoEditar->nombre = $request->input('nombre');
    $productoEditar->precio = $request->input('precio');
    $productoEditar->descripcion = $request->input('descripcion');
    $productoEditar->categoria_id = $request->input('categoria_id');

    if ($request->hasFile('poster')) {
      $ruta =  $request->file('poster')->store('public');
      $nombreArchivo = basename($ruta);
      $productoEditar->poster = $nombreArchivo;
    }

    $productoEditar->update();
    return redirect('/administrarProducto');
  }

  public function destroy($id)
  {
    $producto =  Product::find($id);
    $producto->delete();
    return redirect('/administrarProducto');

  }
  public function search(Request $request){
    $buscar = $request->busqueda;
    $productos =Product::where('nombre','like','%'.$buscar.'%')->paginate(10);
    return view('products.listadoDeProductos')->with('productos',$productos);
  }

  // public function prodXcat(Request $request){
  //
  // }


}
