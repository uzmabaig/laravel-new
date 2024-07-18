<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

//  Route::controller(ProductController::class)->group(function(){
  
//     Route::get('/products','show')->name('home'); 
//      Route::get('/product/{id}','single')->name('view.product');
//     Route::match(['GET', 'POST'],'/add','add')->name('add.product');
//    Route::match(['GET', 'POST'],'/update/{id}','update')->name('update.product');
//    Route::get('/delete/{id}','delete')->name('delete.product');
    
//   });

Route::controller(CustomerController::class)->group(function(){

    Route::get('/customers','show')->name('home');
    Route::get('/customer/{id}','single')->name('view.customer');
    Route::match(['GET', 'POST'],'/add','add')->name('add.customer');
    Route::match(['GET', 'POST'],'/update/{id}','update')->name('update.customer');
    Route::get('/delete/{id}','delete')->name('delete.customer');
    
});

Route::resource('student',StudentController::class);
Route::get('/contact',[ContactController::class,'show']);

Route::get('/book',[StudentController::class,'get']);
Route::resource('getstudent',BookController::class);

Route::resource('user',UserController::class);
Route::resource('consumer',ConsumerController::class);



// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 