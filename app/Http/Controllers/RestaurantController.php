<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RestaurantController extends Controller
{

    public function home(): View
    {
        $restaurants = Restaurant::all();
        return view('restaurants.home', [
          'restaurants'=>$restaurants,
        ]); 
    }

    public function listRestaurants(): View
    {

        $restaurants = Restaurant::all();
        return view('restaurants.listRestaurants', [
            'restaurants' => $restaurants,
        ]);
        
    }

    public function showRestaurant(Restaurant $restaurant): View
    {
      return view('restaurants.showRestaurant', [
        'restaurant' => $restaurant,
      ]);
    }

    public function checkoutRestaurant(): View
  {
    return view('restaurants.checkoutRestaurant');
  }


    
}
