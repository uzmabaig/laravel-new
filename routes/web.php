<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::controller(ProductController::class)->group(function(){

    Route::get('/','show')->name('home');
    Route::get('/product/{id}','single')->name('view.product');
    Route::match(['GET', 'POST'],'/add','add')->name('add.product');
    Route::match(['GET', 'POST'],'/update/{id}','update')->name('update.product');
    Route::get('/delete/{id}','delete')->name('delete.product');
    
});

Route::controller(CustomerController::class)->group(function(){

    Route::get('/customers','show')->name('home');
    Route::get('/customer/{id}','single')->name('view.customer');
    Route::match(['GET', 'POST'],'/add','add')->name('add.customer');
    Route::match(['GET', 'POST'],'/update/{id}','update')->name('update.customer');
    Route::get('/delete/{id}','delete')->name('delete.customer');
    
});


