<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function showproducts(){
    $products = DB::table('products')->get();
    // return $products;
    return view('allproducts',['data' => $products]);
  }

  // public function singleproduct($id){
  //   $products = DB::table('products')->where('id',$id)->get();
  //   return view('product',['data' => $products]);
  // }

  // public function addproduct(){
  //   $products = DB::table('products')->insert([
  //     'name'=>'washing soap',
  //     'price'=>900,
  //     'created_at'=>now(),
  //     'updated_at'=>now()
  //   ]);
  //   if($products){
  //     echo 'New product add successfully';
  //   }
     
  // }

  // public function updateproduct($id){
  //   $products = DB::table('products')->where('id',$id)
  //                                    ->update([
  //                                       'name'=>'powder'
  //                                     ]);
  //     if($products){
  //          echo 'Product updated successfully';
  //       }
  // }

 

  public function deleteproduct($id){
    $products = DB::table('products')->where('id',$id)->delete();
   if($products){
      return redirect()->route('home');
    }
  }
  //   public function deleteproduct(){
  //     $products = DB::table('products')->where('id',16)
  //                                      ->delete();

  // }

  //using in form
  public function add(Request $add){
    $products = DB::table('products')->insert([
      'name'=>$add->productname,
      'price'=>$add->productprice,
      'created_at'=>now(),
      'updated_at'=>now()
    ]);
    if($products){
      return redirect()->route('home');
      
    }else{
      echo '<h3>New product not added</h3>';
    }
   }

   public function updatepage(string $id){
    $products = DB::table('products')->where('id',$id)
                                     ->get();
         return view('updateproduct',['data' => $products]);                     
                                    
   }

    public function updateproduct(Request $update,$id){
    
    $products = DB::table('products')->where('id',$id)
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


 
}
