<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session()->has('Abonnement')) {
                abort(403, 'Abonnement has ended');
            }
            return $next($request);
        });
        $this->middleware(['permission:item-list']);

    }
    public function items(){

        // $items = item::all();
       

        $id = Auth()->id();

        $users = User::where('id',$id)->first() ;

        $menu = Menu::join('restaurants', 'menus.RestaurantID', '=', 'restaurants.RestaurantID')
                ->join('users', 'restaurants.RestaurantID', '=', 'users.restaurants_id')
                ->select('menus.*','restaurants.Name')
                ->where('users.id',$id)
                ->get();

                $items = item::join('menus', 'menus.MenuID', '=', 'items.MenuID')
                ->join('restaurants', 'menus.RestaurantID', '=', 'restaurants.RestaurantID')
                ->join('users', 'restaurants.RestaurantID', '=', 'users.restaurants_id')
                ->select('menus.*', 'items.*')
                ->where('users.restaurants_id', $users->restaurants_id)
                ->where('users.id', $id)
                ->get();

                
        return view('front.admin.items.items',compact('items','menu'));
    }
    public function add_Item(Request $request){

        $request->validate([
            'ItemName' => 'required',
            'Description' => 'required',
            'Price' => 'required|max:255',
            'MenuID' => 'required',
          
        ]);

        $id = Auth()->id();

        $users = User::where('id',$id)->first() ;

        $items = item::join('menus', 'menus.MenuID', '=', 'items.MenuID')
        ->join('restaurants', 'menus.RestaurantID', '=', 'restaurants.RestaurantID')
        ->join('users', 'restaurants.RestaurantID', '=', 'users.restaurants_id')
        ->select('menus.*', 'items.*')
        ->where('users.restaurants_id', $users->restaurants_id)
        ->where('users.id', $id)
        ->get();
         //  dd(count($items) );
        if (count($items) < $users->subscription->NumMenuItemsAllowed) {

                $item = new item();
                $item->ItemName = $request->ItemName;
                $item->Description = $request->Description;
                $item->Price = $request->Price;
                $item->MenuID = $request->MenuID;
                $item->save();
                if ($request->hasFile('image')) {

                $item->addMediaFromRequest('image')->toMediaCollection('images');

                }
                if ($request->hasFile('video')) {
                    $item->addMediaFromRequest('video')->toMediaCollection('videos');
                }
               
                return redirect()->back()->with('flash_message', 'item is add');
            }else {
                return redirect()->back()->with('flash_message', 'you have to upgrade');
            }
              
    }

    public function delete_item($id){
        item::find($id)->delete();

        return redirect()->back()->with('flash_message', 'item is deleted');
    }
}
