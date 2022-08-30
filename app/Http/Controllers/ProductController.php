<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;


class ProductController extends Controller
{

  public function prducts(){
    $products=product::all();
    return Inertia::render('products',['products'=>$products]);
  }


  public function post(){
    return Inertia::render("createproduct");
  }

   public function store(Request $request){
   //dd($request->all());
         
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'image'=>' required',
            'quantity'=>'required',
            'location'=>'required',
            'rate'=>'required',
            'isTrending'=>'required',

    


        ]);

        if ($request->file('image')){
          $path=$request->file('image')->store('products');
        }
    Product::create([
        "name"=>$request->name,
        "price"=>$request->price,
        "image"=>$path,
        "quantity"=>$request->quantity,
        "location"=>$request->location,
        "name"=>$request->name,
        "rate"=>$request->rate,
        "isTrending"=> true//$request->isTrending,
    ]);
    
    return redirect()->back();
}
}
