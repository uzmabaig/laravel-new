<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function show(){
    $products = Product::get();
    return view('product.products',['data' => $products]);
  }
  
  public function single($id){
    $products = Product::find($id);
    return view('product.get',['data' => $products]);
  }
  
  public function add(Request $add){
    if($add->method() === 'POST'){
      $products = $add->validate([
        'productname'=>'required',
        'productprice'=>'required|numeric',
      ]);
      $products = Product::create([
        'name'=>$add->productname,
        'price'=>$add->productprice,
      ]);
      
      if($products){
        return redirect()->route('home')->with('success','Product added successfully!');
        
      }else{
        return back()->with('error','Product not added!');
      }
    }
    $products = Product::get();
    return view('product.add'); 
    
  }
  
  public function update(Request $update,$id){
    
    if($update->method() === 'POST') {
      $products = $update->validate([
        'productname'=>'required',
        'productprice'=>'required|numeric',
      ]);
      
      $products = Product::where('id',$id)->update([
        'name'=>$update->productname,
        'price'=>$update->productprice,
        'updated_at'=>now()
      ]);
      
      if($products){
        return redirect()->route('home')->with('success','Product updated successfully!');
      }else{
        return back()->with('error','Product not updated!');
      }
    }
    
    $products = Product::find($id);
    return view('product.update',['data' => $products]); 
    
    
  }
  
  
  public function delete($id){
    $products = Product::where('id',$id)->delete();
    if($products){
      return redirect()->route('home')->with('success','Product deleted successfully!');
    }else{
      return redirect()->route('home')->with('error','Product not deleted!');
    }
  }
  
  
  
}