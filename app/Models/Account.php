<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Account{

    static function getAccounts($customerId){

        $response = Http::get("http://localhost:8001/api/accounts/$customerId");
        
        Log::info($response->json());

        if($response->successful()){

            return json_decode($response->body());
        }

        return [];
    
    }

    static function getDetails($accountNumber){

        $response = Http::get("http://localhost:8001/api/accounts/$accountNumber/details");
        
        Log::info($response->json());

        if($response->successful()){

            return json_decode($response->body());
        }

        return [];
    
    }
}



?>