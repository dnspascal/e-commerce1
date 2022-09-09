<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Payment;

class PaymentController extends Controller
{
    
    public function browse(){

    }
    public function read(){
        
    }
    public function edit(){
        
    }
    public function add(Request $request){
        $validate=validator($request->all(),[
            "transactionId"=>"required|string",
            "totalPrice"=>"required|number",
            "paymentMethod"=>"required"
        ]);
        if (!$validate){
            return response()->jsan(["message"=>"Validation error", "error"=>$validate()->errors()]);
        }
        $payment = Payment::create(
            [
                "transactionId"=>$request->transactionId,
                "totalPrice"=>$request->totalPrice,
                "paymentMethod"=>$request->paymentMethod
             ]
            );

            return response()->json([
                "message"=>"Payment Added",
                "paymentJson"=> $payment]);

        
    }
    public function delete(){
        
    }
    public function receipt(){
        
    }

}
