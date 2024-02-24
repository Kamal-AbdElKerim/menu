<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session()->has('Abonnement')) {
                abort(403, 'Abonnement has ended');
            }
            return $next($request);
        });
        $this->middleware(['permission:restaurant-info']);
        // $this->middleware(['permission:product-create'], ['only' => ['create', 'store']]);
        // $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }

    public function Restaurant(){
        
      $restaurants =  restaurant::all();
      
        return view('front.admin.restaurant.index',compact('restaurants'));

    }

    public function add_restaurant(Request $request){
       
       $request->validate([
            'Name' => 'required|max:255',
            'Hours' => 'required|max:255',
            'Address' => 'required',
          
        ]);

        $id = Auth()->id();
    
        $restaurant = new restaurant();
        $restaurant->Name = $request->Name;
        $restaurant->UserID = $id;
        $restaurant->Hours = $request->Hours;
        $restaurant->Address = $request->Address;
        $restaurant->save();
         
        return redirect()->back();

    }
    public function update_restaurant(Request $request, $id) {
        $request->validate([
            'Name' => 'required|max:255',
            'Hours' => 'required|max:255',
            'Address' => 'required',
        ]);
    
        $restaurant = Restaurant::where('RestaurantID', $id)->first();
    // dd($restaurant);
        if (!$restaurant) {
            return redirect()->back()->with('error', 'Restaurant not found');
        }
    
        $restaurant->Name = $request->Name;
        $restaurant->Hours = $request->Hours;
        $restaurant->Address = $request->Address;
        $restaurant->save();
    
        return redirect()->back()->with('success', 'Restaurant updated successfully');
    }
    
}
