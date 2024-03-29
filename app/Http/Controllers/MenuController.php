<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\restaurant;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session()->has('Abonnement')) {
                abort(403, 'Abonnement has ended');
            }
            return $next($request);
        });

        
        $this->middleware(['permission:menus-list']);
        // $this->middleware(['permission:product-create'], ['only' => ['create', 'store']]);
        // $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }

    public function menus(){
        $id = Auth()->id();
        $users = User::where('id',$id)->first() ;

      
        $Menus = Menu::join('restaurants', 'menus.RestaurantID', '=', 'restaurants.RestaurantID')
                // ->join('users', 'restaurants.UserID', '=', 'users.id')
                ->join('users', 'restaurants.RestaurantID', '=', 'users.restaurants_id')
                ->select('menus.*','restaurants.Name')
                ->where('users.restaurants_id',$users->restaurants_id)
                ->where('users.id', $id)
                ->get();

           

      
        return view('front.admin.menus.menu',compact("Menus"));
    }


    public function add_Menu(Request $request){

         $request->validate([
            'MenuName' => 'required|max:255',
          
        ]);
    $id = Auth()->id();

     $restaurant = restaurant::where("UserID",$id)->first();

     if ($restaurant) {

        $menu = new Menu();
        $menu->MenuName = $request->MenuName;
        $menu->RestaurantID = $restaurant->RestaurantID;
        $menu->save();
    }else {
        $User = User::where("id",$id)->first();
          $menu = new Menu();
        $menu->MenuName = $request->MenuName;
        $menu->RestaurantID = $User->restaurants_id;
        $menu->save();

    }
        return redirect()->back()->with('flash_message', 'Menu is ADD!');
        ;

    }

    public function delete_menu($id){

        Menu::find($id)->delete();

        return redirect()->back()->with('flash_message', 'Menu is deleted!');
           
    }
}
