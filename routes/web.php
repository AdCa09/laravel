<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/home', [HomeController::class, 'index'])->name('index');

Route::get('/', [RestaurantController::class, 'home'])->name('home');

Route::get('/restaurants', [RestaurantController::class, 'listRestaurants'])->name('listRestaurants');

Route::get('/checkout', [RestaurantController::class, 'checkoutRestaurant'])->name('checkoutRestaurant');

Route::get('/{restaurant}', [RestaurantController::class, 'showRestaurant'])->name('showRestaurant');

Route::get('/categories/{category}', [RestaurantController::class, 'restaurantByCategory'])->name('restaurants.ByCategory');

Route::get('/tags/{tag}', [RestaurantController::class, 'restaurantsByTag'])->name('restaurants.ByTag');


// Route::get('/restaurant/create', function(){

//     return view('restaurants.create');

// });

// Route::get('/article/edit/{post:id}', function($id){

// });

// Route::put('/article/edit/{post:id}', function($id){

// });

// Route::delete('/article/delete/{post:id}', function($id){

// });