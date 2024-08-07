<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RestaurantController extends Controller
{

  public function home(): View
  {
    $restaurants = Restaurant::all();
    return view('restaurants.home', [
      'restaurants' => $restaurants,
    ]);
  }

  public function listRestaurants(Request $request): View
  {
    $query = Restaurant::query();

    if ($search = $request->search) {
      $query->where('name', 'LIKE', '%' . $search . '%')
        ->orWhere('description', 'LIKE', '%' . $search . '%');
    }
    $restaurants = $query->get();
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


  public function restaurantsByCategory(Category $category): View
  {
    // si ajout de catégorie par la suite : 
    return view('restaurants.home', [
      // 'restaurants' => $category->restaurants()->paginate(10)
      'restaurants' => Restaurant::where(
        'category_id',
        $category->id
      ),

    ]);
  }

  public function restaurantsByTag(Tag $tag): View
  {
    $restaurants = $tag->restaurants;
    return view('restaurants.listRestaurants', [
      'restaurants' => $restaurants,
    ]);
  }

}
