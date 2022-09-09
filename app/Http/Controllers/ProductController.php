<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;


class ProductController extends Controller
{
  public function browse(){

  }
  public function read(){
      
  }
  public function edit(){
      
  }
  public function add(Request $request){
      $validate=validator($request->all(),[
          "productName"=>"required|string",
          "price"=>"required|number",
          "currency"=>"required|string",
          "description"=>"required|string",
          "image"=>"required|string",
          "colorName"=>"required|string",
          "colorCode"=>"required|string",
          "quantity"=>"required|number"
      ]);
      if (!$validate){
          return response()->jsan(["message"=>"Validation error", "error"=>$validate()->errors()]);
      }
      $product = Product::create(
          [
         "productName"=>$request->productName,
          "price"=>$request->price,
          "currency"=>$request->currency,
          "description"=>$request->description,
          "image"=>$request->image,
          "colorName"=>$request->colorName,
          "colorCode"=>$request->colorCode,
          "quantity"=>$request->quantity,
           ]
          );

          return response()->json([
              "message"=>"Product Added",
              "paymentJson"=> $product]);

      
  }
  public function delete(){
      
  }
  public function receipt(){
      
  }










  public function allProducts(){
    $products=Product::all();
    
    return response()->json(["products"=>$products]);
  }

  public function prducts(){
    $products=product::all();
    return Inertia::render('products',['products'=>$products]);
  }


  public function post(){
    return Inertia::render("createproduct");
  }

//    public function store(Request $request){
//    //dd($request->all());
         
//         $request->validate([
//             'name'=>'required',
//             'price'=>'required',
//             'image'=>' required',
//             'quantity'=>'required',
//             'location'=>'required',
//             'rate'=>'required',
//             'isTrending'=>'required',

    


//         ]);

//         if ($request->file('image')){
//           $path=$request->file('image')->storePublicly('products');
//         }
//     Product::create([
//         "name"=>$request->name,
//         "price"=>$request->price,
//         "image"=>$path,
//         "quantity"=>$request->quantity,
//         "location"=>$request->location,
//         "name"=>$request->name,
//         "rate"=>$request->rate,
//         "isTrending"=> true//$request->isTrending,
//     ]);
    
//     return redirect()->back();
// }
}
