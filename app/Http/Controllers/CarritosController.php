<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\Product;
use App\Http\Controllers\Controller;
use Auth;

class CarritosController extends Controller
{
    public function index()
    {
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
      // dd($carts);
      return view('carrito.index', compact('carts'));
    }

    public function add(Request $req)
    {
      $product = Product::find($req->id);

      $cart = new Carrito;

      $cart->user_id = Auth::user()->id;
      $cart->product_id = $product->id;
      $cart->cantidad = 1;
      $cart->image_product = $product->poster;
      $cart->nombre = $product->nombre;
      $cart->precio = $product->precio;
      $cart->descripcion = $product->descripcion;
      $cart->estadoDeCompra = 0;

      $cart->save();

      return redirect('/home');
      // return view('carrito.index')->with('carrito',$carrito);
    }

    public function show()
    {
      // $carrito = Carrito::with('products')->where('user_id',$id)->latest()->first();
      // return view('carrito.index')->with('carrito',$carrito);
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
      // dd($carts);
      return view('partials.header', compact('carts'));
    }

    public function destroy(Request $req)
    {
      $product = Carrito::find($req->id);
      $product->delete();
      return redirect('/carrito/index/');
    }
    // public function destroy($id)
    // {
    //   $prodDelcarrito =  Carrito::find($id);
    //   $prodDelcarrito->delete();
    //   return redirect('/home');
    // }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function cerrarCompra(Request $request)
    {
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
      foreach ($carts as $cart) {
        $cart->estadoDeCompra = 1;
        $cart->update();
      }
      return redirect('/home');
    }
}
