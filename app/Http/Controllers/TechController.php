<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technologie;

class TechController extends Controller
{
    //
      public function addTech(Request $req)
    {
        $tech = new Technologie;
        $tech->TechName=$req->input('TechName');
        $tech->	TechDesc=$req->input('TechDesc');
        $tech->TechImg=$req->file('file')->store('services');
       

        $tech->save();
        return $tech;
    }
     public function Techlist(){
        $tech = new Technologie;
        return Technologie::all();
    }
}
