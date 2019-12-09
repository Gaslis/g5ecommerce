<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
      return view('partials.perfil')->with('user',$user);
    }

    public function edit($id)
    {
      $usuarioEditar = User::find($id);
      // $categorias = Category::all();
      // $categoriaEditada = Category::find($productoEditar->categoria_id);
      // return view('partials.perfilEditar', compact('usuarioEditar', '$usuarioEditar'));
      return view('partials.perfilEditar')->with('usuarioEditar',$usuarioEditar);
    }

    public function update(Request $request, $id)
    {
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
      return view('partials.perfil')->with('user',$usuarioEditar);
    }


    public function destroy($id)
    {
        //
    }
}
