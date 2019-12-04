<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;

class CarritosController extends Controller
{
    public function index()
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
