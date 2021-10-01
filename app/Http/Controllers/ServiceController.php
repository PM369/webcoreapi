<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function addService(Request $req)
    {
        $service = new Service;
        $service->ServiceName=$req->input('ServiceName');
        $service->ServiceDesc=$req->input('ServiceDesc');
        $service->ServiceImg=$req->file('file')->store('services');
       

        $service->save();
        return $service;
    }
      public function list(){
        $service = new Service;
        return Service::all();
    }
        function delete ($id)
    {
        $res = Service:: where('id',$id)->delete();
        if($res){
            return ["res"=>"Data has been deleted"];
        }
        else{
           return ["res"=>"Something wrong!!"]; 
        }
    }
      function getItem ($id)
    {
         return Service::find($id);
    }
     function UpdateItem ($id, Request $req)
    {
  
        $service = Service:: find($id);
        $service->ServiceName=$req->input('ServiceName');
        $service->ServiceDesc=$req->input('ServiceDesc'); 
        if($req->file('file'))
        {
            $service->ServiceImg=$req->file('file')->store('services'); 
        }                    
        $service->save();
        return $service;
    }
}
