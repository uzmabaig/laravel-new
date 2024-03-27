<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function showproducts(){
    $products = Product::get();
    return view('product/products',['data' => $products]);
  }
  
  public function singleproduct($id){
    $products = Product::find($id);
    return view('product/get',['data' => $products]);
  }
  
  //using in form
  public function add(Request $add){
    $products = $add->validate([
      'productname'=>'required',
      'productprice'=>'required|numeric',
    ]);
    $products = Product::create([
      'name'=>$add->productname,
      'price'=>$add->productprice,
    ]);
    
    if($products){
      return redirect()->route('home');
      
    }else{
      echo '<h3>New product not added</h3>';
    }
  }
  
  
  public function updatepage($id){
    $products = Product::find($id);
    return view('product/update',['data' => $products]);      
  }
  
  public function updateproduct(Request $update,$id){
    $products = $update->validate([
      'productname'=>'required',
      'productprice'=>'required|numeric',
    ]);
    
    $products = Product::where('id',$id)
    ->update([
      'name'=>$update->productname,
      'price'=>$update->productprice,
      'created_at'=>now(),
      'updated_at'=>now()
    ]);
    if($products){
      return redirect()->route('home');
    }
    else{
      echo '<h3>Product not updated</h3>';
    }
  }
  
  public function deleteproduct($id){
    $products = Product::where('id',$id)->delete();
    if($products){
      return redirect()->route('home');
    }
  }
  
}