<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'showproducts'])->name('home');
Route::get('/product/get/{id}',[ProductController::class,'singleproduct'])->name('viewproduct');

//using in form
Route::view('newproduct','/product/add');

Route::controller(ProductController::class)->group(function(){
    Route::post('/add','add')->name('addProduct');

    Route::get('/updatepage/{id}','updatepage')->name('update.page');

    Route::post('/update/{id}','updateproduct')->name('update.product');

    Route::get('/delete/{id}','deleteproduct')->name('delete.product');
    
});


