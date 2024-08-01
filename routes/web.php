<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;


Route::get('/', [RestaurantController::class, 'index'])->name('index');



// Route::get('/restaurants/{id}', [RestaurantController::class, 'show'])->name('restaurants.show');


// Route::get('/restaurant/create', function(){

//     return view('restaurants.create');

// });

// Route::get('/article/edit/{post:id}', function($id){

// });

// Route::put('/article/edit/{post:id}', function($id){

// });

// Route::delete('/article/delete/{post:id}', function($id){

// });