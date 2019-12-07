<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\Product;
use App\Http\Controllers\Controller;

class CarritosController extends Controller
{
    public function index($id)
    {

    }

    public function add($id)
    {
      $product = Product::find($id);

      $cart = auth()->user()->carts()->create();

      $cart->products()->attach($id, [
        'cantidad' => 1,
        'precio_unitario' => $product->precio,
      ]);

      return redirect('/home');
      // return view('carrito.index')->with('carrito',$carrito);
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
      $carrito = Carrito::with('products')->where('user_id','like','%'.$id.'%')->latest()->first();
      return view('carrito.index')->with('carrito',$carrito);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
      $prodDelcarrito =  Carrito::find($id);
      $prodDelcarrito->delete();
      return redirect('/home');
    }
}
