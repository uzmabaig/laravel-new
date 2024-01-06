<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ProductController::class,'showproducts'])->name('home');
Route::get('/product/{id}',[ProductController::class,'singleproduct'])->name('viewproduct');

// Route::get('/add',[ProductController::class,'addproduct']);
// // Route::get('/update',[ProductController::class,'updateproduct']);

Route::get('/delete/{id}',[ProductController::class,'deleteproduct'])->name('deleteproduct');
// Route::get('delete',[ProductController::class,'deleteproduct']);

//using in form
Route::view('newproduct','/addproduct');

Route::controller(ProductController::class)->group(function(){
    Route::post('/add','add')->name('addProduct');
    Route::get('/updatepage/{id}','updatepage')->name('Update.page');
    Route::get('/update','updateproduct')->name('update.product');
    
});


