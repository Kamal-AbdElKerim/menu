<?php

namespace App\Http\Controllers\Auth;

use App\Models\role;
use App\Models\User;
use Illuminate\View\View;
use App\Models\restaurant;
use App\Models\subscription;
use Illuminate\Http\Request;
use App\Models\model_has_role;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('front.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


       $subscription = subscription::where('PlanName','Free')->first();
   
//    dd($subscription->SubscriptionID);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'sub_id' => $subscription->SubscriptionID,
            'Is_active' => 2,
            'password' => Hash::make($request->password),
        ]);

        $lastInsertedId = $user->id;
        
      $role = role::where('name','owner')->first() ;
  
    //    $mo =  model_has_role::create([
    //         'role_id' => $role->id,
    //         'model_type' => "App\Models\User",
    //         'model_id' => $lastInsertedId,  
         
    //     ]);

        $user->assignRole('owner');
      
    
        $restaurant = new restaurant();
        $restaurant->Name = "name the restaurant";
        $restaurant->UserID = $lastInsertedId;
        $restaurant->Hours = "Hours the start (08.00)";
        $restaurant->Address = "Address the restaurant";
        $restaurant->save();
         
        $restaurantID = $restaurant->RestaurantID;

        $users = User::where('id', $lastInsertedId)->first(); 

        $users->update([
            'restaurants_id' => $restaurantID, 
           
        ]);
    
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
