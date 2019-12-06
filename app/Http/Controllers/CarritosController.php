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
      $carrito = Carrito::where('user_id','===',$id);
      return view('carrito.index')->with('carrito',$carrito);
    }

    public function add($id,$userId)
    {
      $produAponer = Product::find($id);
      $carrito = new Carrito;
      $carrito->user_id = $userId;
      $carrito->product_id = $produAponer->id;
      $carrito->precio_unitario = $produAponer->precio;
      $carrito->save();
      return redirect('/home');
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
      $carrito = Carrito::find($id);
      return view('partials.carrito')->with('carrito',$carrito);
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
        //
    }
}
