<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menus(){
        return view('front.admin.menus.menu');
    }


    public function add_Menu(Request $request){

        $validatedData = $request->validate([
            'MenuName' => 'required|string|max:255',
          
        ]);
    
        $menu = new Menu();
        $menu->MenuName = $request->MenuName;
        $menu->description = $request->description;
        $menu->save();

    }
}
