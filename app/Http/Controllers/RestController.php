<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RestController extends Controller
{
    public function list(){
        try{

            $apiUrl = 'https://mindicador.cl/api';
            $json = file_get_contents($apiUrl);

            $dailyIndicators = json_decode($json);

            return response()->json($dailyIndicators);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    public function object(){

        try{

            $apiUrl = 'https://mindicador.cl/api/uf/25-12-2019';

            $json = file_get_contents($apiUrl);

            $dailyIndicators = json_decode($json);

            return response()->json($dailyIndicators);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }
}
