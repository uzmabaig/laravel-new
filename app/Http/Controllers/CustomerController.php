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
  
  public function add(Request $add){
    if($add->method() === 'POST'){
      $customers = $add->validate([
        'customerfirstname'=>'required',
        'customerlastname'=>'required',
        'customeremail'=>'required',
        'customerphone_number'=>'required|digits:11',
      ]);
      $customers = Customer::create([
        'firstname'=>$add->customerfirstname,
        'lastname'=>$add->customerlastname,
        'email'   =>$add->customeremail,
        'phonenumber'=>$add->customerphone_number,
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
  
  public function delete($id){
    $customers = Customer::where('id',$id)->delete();
    if($customers){
      return redirect()->route('home')->with('success','Customer deleted successfully!');
    }else{
      return redirect()->route('home')->with('error','Customer not deleted!');
    }
  }
  
}
