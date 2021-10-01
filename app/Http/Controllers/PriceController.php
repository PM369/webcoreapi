<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;

class PriceController extends Controller
{
    //
       public function addPrice(Request $req)
    {
        $price = new Price;
        $price->PlanName=$req->input('PlanName');
        $price->Price=$req->input('Price');
        $price->PlanDescription=$req->input('PlanDescription');
       
        $price->save();
        return $price;
    }
      public function list(){
        $price = new Price;
        return Price::all();
    }
}
