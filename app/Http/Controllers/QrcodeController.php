<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Menu;
use App\Models\restaurant;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session()->has('Abonnement')) {
                abort(403, 'Abonnement has ended');
            }
            return $next($request);
        });
        $this->middleware(['permission:QR-list']);

    }


    public function afficher_menu($id){

        $items = item::where('MenuID',$id)->get();
        $Menu = Menu::where('MenuID',$id)->first();
        $restaurants_id =Auth()->user()->restaurants_id ;
        $restaurant = restaurant::where('RestaurantID',$restaurants_id)->first();
      

        return view('front.menus.index',compact('items','Menu','restaurant'));

    }

    public function generate() {

    	$restaurants_id =Auth()->user()->restaurants_id ;
        

        
          
        $menus = Menu::where('RestaurantID',$restaurants_id)->get();

    

        
      

    	
    	
    	return view("front.admin.QR_Code.QR_Code", compact('menus'));
    }


}
