<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class MainController extends Controller
{
    public function list(Request $request){

        $token = "uh2nAetQjYp0WG91KhpGXnnTYye3Bxnj";
        $value1 = $request->input("q");
        $value2 = $request->input("language");
  
        if(is_null($request)){
          $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/search?apikey=$token&q=A&offset=25")->json();
          return view("welcome", ['data'=>$data]);
        }
  
        
        $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/search?apikey=$token&q=$value1")->json();
        
        return view("welcome", ['data'=>$data]);
      }
}
