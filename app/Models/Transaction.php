<?php

namespace App\Models;

use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Transaction 
{
    use HasFactory;

    static function create($transactionAmount, $transactionTypeId, $accountNumber){
        $response = Http::put('http://localhost:8001/api/transactions',[
            'transaction_amount' => $transactionAmount,
            'transaction_type_id' => $transactionTypeId,
            'account_number' => $accountNumber,
        ]);
        
        Log::info($response->json());

        if($response->successful()){
            if($response->json('success')){
                return true;
            }else{
                Log::error($response->json('message'));
            }
        }

        return false;
    }

    static function getHistory($customerId){
        $response = Http::get("http://localhost:8001/api/transactions/$customerId");
        
        Log::info($response->json());

        if($response->successful()){

            return json_decode($response->body());
        }

        return [];
    }

    static function getHistorybyAccountNumber($accountNumber){
        $response = Http::get("http://localhost:8001/api/transactions/$accountNumber/history");
        
        Log::info($response->json());

        if($response->successful()){

            return json_decode($response->body());
        }

        return [];
    }
}
