<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class TipoController extends Controller
{
    public function index(){
        $tipo = Tipo::all();
        return $tipo;
    }

    public function store(Request $request){
        $tipo = new Tipo;

        $tipo->typeName = $request->typeName;
        $tipo->save;
    }

    public function update(Request $request){
        $tipo = new Tipo;

        $tipo->typeName = $request->typeName;
        $tipo->save;
    }

    public function destroy(Request $request){
        $tipo = new Tipo;

        $tipo->delete($pokemon->typeID);
    }
}
