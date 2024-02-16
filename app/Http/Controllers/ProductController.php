<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function showproducts(){
    $products = Product::get();
    return view('all_products',['data' => $products]);
  }

  public function singleproduct($id){
    $products = Product::where('id',$id)->get();
    return view('product_get',['data' => $products]);
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


   public function updatepage(string $id){
    $products = Product::where('id',$id)
                                     ->get();
         return view('product_update',['data' => $products]);                     
                                    
   }

    public function updateproduct(Request $update,$id){
    
    $products = Product::where('id',$id)
                                     ->update([
                                      'name'=>$update->productname,
                                      'price'=>$update->productprice,
                                      'created_at'=>now(),
                                      'updated_at'=>now()
                                     ]);
      if($products){
         echo 'Product updated successfully';
           }
    }

  public function deleteproduct($id){
    $products = Product::where('id',$id)->delete();
   if($products){
      return redirect()->route('home');
    }
  }

}