<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Carrito;
use Auth;

class UsersController extends Controller
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
      $user = User::find($id);
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
      return view('partials.perfil',[ 'user'  =>$user,
                                      'carts' => $carts,]);
    }

    public function edit($id)
    {
      $usuarioEditar = User::find($id);
      // $categorias = Category::all();
      // $categoriaEditada = Category::find($productoEditar->categoria_id);
      // return view('partials.perfilEditar', compact('usuarioEditar', '$usuarioEditar'));
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);

      return view('partials.perfilEditar')
      ->with('usuarioEditar',$usuarioEditar)
      ->with('carts',$carts);
    }

    public function update(Request $request, $id)
    {
      $carts = Carrito::all()->where('estadoDeCompra', 0)->where('user_id', Auth::user()->id);
      $usuarioEditar = User::find($id);
      $usuarioEditar->name = $request->input('name');
      $usuarioEditar->email = $request->input('email');
      // $usuarioEditar->apellido = $request->input('apellido');


      if ($request->hasFile('image')) {
        $ruta =  $request->file('image')->store('public/avatares');
        $nombreArchivo = basename($ruta);
        $usuarioEditar->profile = $nombreArchivo;
      }else{
        $usuarioEditar->profile = $usuarioEditar->profile;
      }

      $usuarioEditar->update();
      return view('partials.perfil')->with('user',$usuarioEditar)->with('carts',$carts);
    }


    public function destroy($id)
    {
        //
    }
}
