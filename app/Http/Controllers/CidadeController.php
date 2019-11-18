<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cidade;

class CidadeController extends Controller
{
    //
    public function viewCidade(){
        $listaCidades = Cidade::all();

        return view('cidade', ['listaCidades'=>$listaCidades]);
    }
}
