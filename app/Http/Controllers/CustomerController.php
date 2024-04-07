<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
  public function show(){
    $customers = Customer::get();
    return view('customer.customers',['data'=>$customers]);
    
  }
  public function single($id){
    $customers = Customer::find($id);
    return view('customer.get',['data'=>$customers]);
    
  }
  
  public function add(Request $request){
    if($request->method() === 'POST'){
      $customers = $request->validate([
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required|unique:customers',
        'phonenumber'=>'required|digits:11',
      ]);
      $customers = Customer::create([
        'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'email'   =>$request->email,
        'phonenumber'=>$request->phonenumber,
      ]);
  
      if($customers){
        return redirect()->route('home')->with('success','Customer added successfully!');
        
      }else{
        return back()->with('error','Customer not added!');
      }
      
      
    }
    $customers = Customer::get();
    return view('customer.add');
  }

  public function update(Request $request,$id){
    
    if($request->method() === 'POST') {
      $customers = $request->validate([
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required',
        'phonenumber'=>'required|digits:11',
      ]);
      
      $customers = Customer::where('id',$id)->update([
        'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'email'   =>$request->email,
        'phonenumber'=>$request->phonenumber,
        'updated_at'=>now()
      ]);
      
      if($customers){
        return redirect()->route('home')->with('success','Customer updated successfully!');
      }else{
        return back()->with('error','Customer not updated!');
      }
    }
    
    $customers = Customer::find($id);
    return view('customer.update',['data' => $customers]); 
    
    
  }
  
  public function delete($id){
    $customers = Customer::where('id',$id)->delete();
    if($customers){
      return redirect()->route('home')->with('success','Customer deleted successfully!');
    }else{
      return redirect()->route('home')->with('error','Customer not deleted!');
    }
  }
  
}
