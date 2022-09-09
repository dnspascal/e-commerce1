<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function browse(){


    }
    public function read(){
        
    }public function edit(Request $request, $itemId){
$item = Purchase::find($itemId);
if(!$item){
    return response()->json(["message"=>"There is no such a purchase"]);
}
Purchase::update([
    "productId"=>$request->productId,
    "userId"=>$request->userId,
    "totalNumberOfProducts"=>$request->totalNumberOfProducts,
    "paymentId"=>$request->paymentId,

]);
        
    }
    public function add(){
        
    }
    public function delete($itemId){
    $item =Purchase::find($itemId);

    if(!$item){
        return response()->json(["message"=>"Item not found"]);
    }

    $item->destroy();
        
    }



}
