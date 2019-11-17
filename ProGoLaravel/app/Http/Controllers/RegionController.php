<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class RegionController extends Controller
{
    public function index(){
        $region = Region::all();
        return $region;
    }

    public function store(Request $request){
        $region = new Region;

        $region->regionName = $request->regionName;
        $region->save;
    }

    public function update(Request $request){
        $region = new Region;

        $region->regionName = $request->regionName;
        $region->save;
    }

    public function destroy(Request $request){
        $region = new Region;

        $region->delete($request->regionID);
    }

}
