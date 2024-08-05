<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RestaurantController extends Controller
{

    public function home(): View
    {
        
        return view('restaurants.index'); 
    }

    public function listRestaurants(): View
    {

        $restaurants = Restaurant::paginate(6);
        return view('restaurants.listRestaurants', [
            'restaurants' => $restaurants,
        ]);
        
    }

    public function show(Restaurant $restaurant): View
    {
      return view('restaurants.show', [
        'restaurant' => $restaurant,
      ]);
    }


    
}
