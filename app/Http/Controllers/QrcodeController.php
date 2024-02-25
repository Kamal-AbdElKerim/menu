<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Menu;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    public function afficher_menu($id){
        $items = item::where('MenuID',$id)->get();
        $Menu = Menu::where('MenuID',$id)->first();
        return view('front.menus.index',compact('items','Menu'));
    }
}
