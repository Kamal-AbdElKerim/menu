<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Menu;
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
    }
    public function items(){

        $items = item::all();
        $menu = Menu::all();

        // dd($menu);


        return view('front.admin.items.items',compact('items','menu'));
    }
    public function add_Item(Request $request){

        $request->validate([
            'ItemName' => 'required',
            'Description' => 'required',
            'Price' => 'required|max:255',
            'MenuID' => 'required',
          
        ]);
           

                $menu = new item();
                $menu->ItemName = $request->ItemName;
                $menu->Description = $request->Description;
                $menu->Price = $request->Price;
                $menu->MenuID = $request->MenuID;
                $menu->save();

                return redirect()->back();
    }

    public function delete_item($id){
        item::find($id)->delete();

        return redirect()->back();
    }
}
