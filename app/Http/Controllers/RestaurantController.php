<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $this->middleware(['permission:Restaurant'], ['except' => 'restaurant_all']);
        $this->middleware(['permission:restaurant_all'], ['only' => 'restaurant_all']);
        // $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }

    public function restaurant_all(){
     
    
      $restaurants  = restaurant::get();
      
        return view('front.admin.restaurant_all.restaurant_all',compact('restaurants'));

    }
    public function Restaurant(){
        $id = Auth()->id();
      $User =  User::where('id',$id)->first();
      $restaurants_id = $User->restaurants_id ;
      $restaurants  = restaurant::where('RestaurantID',$restaurants_id)->first();
      
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
         
        return redirect()->back()->with('flash_message', 'Restaurant add successfully');

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
            return redirect()->back()->with('flash_message', 'Restaurant not found');
        }
    
        $restaurant->Name = $request->Name;
        $restaurant->Hours = $request->Hours;
        $restaurant->Address = $request->Address;
        $restaurant->save();
    
        return redirect()->back()->with('flash_message', 'Restaurant updated successfully');
    }
    
}
