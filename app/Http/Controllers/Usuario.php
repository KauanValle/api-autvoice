<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsersController extends Controller
{
    public function index(){
        $usuarios = Usuario::get();
        return \view('usuarios.list', ['usuarios'=>$usuarios]);
    }

    public function new(){
        return view('usuarios.form');
    }

    public function add(Request $request){
        $usuario = new Usuario;
        $usuario = $usuario->create($request->all());
        return Redirect::to('/usuarios');
    }

    public function edit($id){
        $usuario= Usuario::find($id);
        return view('usuarios.form', ['usuario'=>$usuario]);
    }

    public function update($id, Request $request){
        $usuario= Usuario::find($id);
        $usuario = $usuario->update($request->all());
        return Redirect::to('/usuarios');
    }

    public function delete($id){
        $usuario= Usuario::find($id);
        $usuario -> delete();
        return Redirect::to('/usuarios');
    }
}
