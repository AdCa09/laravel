<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', [RestaurantController::class, 'home'])->name('home');

Route::get('/restaurants', [RestaurantController::class, 'listRestaurants'])->name('listRestaurants');

Route::get('/checkout', [RestaurantController::class, 'checkoutRestaurant'])->name('checkoutRestaurant');

Route::get('/{restaurant}', [RestaurantController::class, 'showRestaurant'])->name('showRestaurant');




// Route::get('/restaurant/create', function(){

//     return view('restaurants.create');

// });

// Route::get('/article/edit/{post:id}', function($id){

// });

// Route::put('/article/edit/{post:id}', function($id){

// });

// Route::delete('/article/delete/{post:id}', function($id){

// });