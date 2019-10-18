<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;

class PokemonController extends Controller
{
    public function index(){
        $pokemon = Pokemon::all();
        return $pokemon;
    }

    public function store(Request $request){
        $pokemon = new Pokemon;

        $pokemon->pokedex = $request->pokedex;
        $pokemon->name = $request->name;
        $pokemon->description = $request->description;
        $pokemon->tipo = $request->tipo;
        $pokemon->height = $request->height;
        $pokemon->weight = $request->weight;
        $pokemon->sex = $request->sex;
        $pokemon->preEvolution = $request->preEvolution;
        $pokemon->evolution = $request->evolution;
        $pokemon->region = $request->region;
        $pokemon->image = $request->image;
        $pokemon->activeGo = $request->activeGo;
        $pokemon->activeGoShiny = $request->activeGoShiny;
        $pokemon->save;
    }

    public function update(Request $request){
        $pokemon = new Pokemon;

        $pokemon->pokedex = $request->pokedex;
        $pokemon->name = $request->name;
        $pokemon->description = $request->description;
        $pokemon->tipo = $request->tipo;
        $pokemon->height = $request->height;
        $pokemon->weight = $request->weight;
        $pokemon->sex = $request->sex;
        $pokemon->preEvolution = $request->preEvolution;
        $pokemon->evolution = $request->evolution;
        $pokemon->region = $request->region;
        $pokemon->image = $request->image;
        $pokemon->activeGo = $request->activeGo;
        $pokemon->activeGoShiny = $request->activeGoShiny;
        $pokemon->save;
    }

    public function destroy(Request $request){
        $pokemon = new Pokemon;

        $pokemon->delete($pokemon->regionID);
    }
}
