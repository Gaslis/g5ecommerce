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
      return view('carrito.index', compact('carts'));
    }

    public function add(Request $req)
    {
      if(Auth::user()) {
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

      $cart->save();}
      else {
        $carts = null;
      }

      return redirect('/home');
      // return view('carrito.index')->with('carrito',$carrito);
    }

    public function destroy(Request $req)
    {
      $product = Carrito::find($req->id);
      $product->delete();
      return redirect('/carrito/index/');
    }
    
    public function Contacto()
    {
      if(Auth::user()) {
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
    } else {
      $carts = null;
    }
     return view('products.formularioContacto', compact('carts'));
    }

    public function cerrarCompra(Request $request)
    {
      if(Auth::user()) {
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
    } else {
      $carts = null;
    }
      foreach ($carts as $cart) {
        $cart->estadoDeCompra = 1;
        $cart->update();
      }

      return redirect('/carrito/checkout');
    }

    public function show()
    {
      if(Auth::user()) {
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
    } else {
      $carts = null;
    }
    return view('carrito.checkout', compact('carts'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

}
