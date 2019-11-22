<?php

namespace App\Http\Controllers;

use App\Usuario;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function viewHome(){
        $usuario = new Usuario();
        $listaUsuarios = $usuario->all();
        //dd($listaUsuarios);

        return view('home', ['listaUsuarios'=>$listaUsuarios]);
    }

    public function request(Request $req, $id=0){
        if($id == 0){
            echo 'Passe alguma coisa!';
        }else {
            dd($id);
        }

    }

    public function viewFormulario(){
        return view('formulario');
    }

    public function cadastrarFormulario(Request $request){
        dd($request->nome);
    }
}
