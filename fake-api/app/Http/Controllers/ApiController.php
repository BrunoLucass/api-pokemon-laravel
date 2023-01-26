<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
    public function index()
    {

        $url = "https://www.canalti.com.br/api/pokemons.json";
        $pokemons = json_decode(file_get_contents($url));
        
        
        return view('welcome', ['pokemons' => $pokemons]);
    }

}
