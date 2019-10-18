<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AtaqueCargado;

class AtaqueCargadoController extends Controller
{
    public function index(){
        $ataqueCargado = AtaqueCargado::all();
        return $ataqueCargado;
    }

    public function store(Request $request){
        $ataqueCargado = new AtaqueCargado;

        $ataqueCargado->attackName = $request->attackName;
        $ataqueCargado->attackType = $request->attackType;
        $ataqueCargado->danioPVP = $request->danioPVP;
        $ataqueCargado->danioNormal = $request->danioNormal;
        $ataqueCargado->speed = $request->speed;
        $ataqueCargado->save;
    }

    public function update(Request $request){
        $ataqueCargado = new AtaqueCargado;

        $ataqueCargado->attackName = $request->attackName;
        $ataqueCargado->attackType = $request->attackType;
        $ataqueCargado->danioPVP = $request->danioPVP;
        $ataqueCargado->danioNormal = $request->danioNormal;
        $ataqueCargado->speed = $request->speed;
        $ataqueCargado->save;
    }

    public function destroy(Request $request){
        $ataqueCargado = new AtaqueCargado;

        $ataqueCargado->delete($request->loadAttackID);
    }
}
