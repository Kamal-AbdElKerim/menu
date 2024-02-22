<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;



class SubscriptionsController extends Controller
{


    function __construct()
    {
        $this->middleware(['permission:Abonnement-list'],['except' => ['chose_abonnement','buy_aboonement','checkTrialPeriod']]);
        // $this->middleware(['permission:product-create'], ['only' => ['create', 'store']]);
        // $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }

    public function index(){

         return view('front.admin.subscription.form-layout');

    }



    public function plans_abonnement(){

        $subscription = subscription::all();

        return view('front.admin.subscription.form-layout',compact('subscription'));
    }

    public function add_subscription(Request $request){
           // Validation rules
           $rules = [
            'PlanName' => 'required|max:50',
            'Description' => 'required|max:255',
            'NumMenuItemsAllowed' => 'required|integer',
            'MediaTypesAllowed' => 'required|max:100',
            'ScansAllowed' => 'required|integer',
            'Duration' => 'required|max:50',
            'Price' => 'required|numeric|min:0',
        ];

        // Custom validation messages
        $messages = [
            'Price.numeric' => 'The price must be a number.',
            'Price.min' => 'The price must be at least 0.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // If validation fails, return the validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validation passed, create a new subscription
        $subscription = new subscription();
        $subscription->PlanName = $request->PlanName;
        $subscription->Description = $request->Description;
        $subscription->NumMenuItemsAllowed = $request->NumMenuItemsAllowed;
        $subscription->MediaTypesAllowed = $request->MediaTypesAllowed;
        $subscription->ScansAllowed = $request->ScansAllowed;
        $subscription->Duration = $request->Duration;
        $subscription->Price = $request->Price;
        $subscription->save();

        // Redirect or return a response indicating success
        return redirect()->route('plans_abonnement')->with('success', 'Subscription added successfully.');
        
    }

    public function delete_sub($id){
         
        subscription::find($id)->delete();

        return redirect()->back();

    }
    public function form_Update_sub($id){
         
       $subscription = subscription::find($id);

     return view('front.admin.subscription.update',compact('subscription'));


    }
  
    public function update_subscription(Request $request, $id)
    {
        // Find the subscription by ID
        $subscription = Subscription::find($id);

        // If subscription with the given ID doesn't exist, return an error response
        if (!$subscription) {
            return response()->json(['error' => 'Subscription not found'], 404);
        }

        // Validation rules
        $rules = [
            'PlanName' => 'required|max:50',
            'Description' => 'required|max:255',
            'NumMenuItemsAllowed' => 'required|integer',
            'MediaTypesAllowed' => 'required|max:100',
            'ScansAllowed' => 'required|integer',
            'Duration' => 'required|max:50',
            'Price' => 'required|numeric',
        ];

        // Custom validation messages
        $messages = [
            'Price.numeric' => 'The price must be a number.',
            'Price.min' => 'The price must be at least 0.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // If validation fails, return the validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Update the subscription attributes
        $subscription->PlanName = $request->PlanName;
        $subscription->Description = $request->Description;
        $subscription->NumMenuItemsAllowed = $request->NumMenuItemsAllowed;
        $subscription->MediaTypesAllowed = $request->MediaTypesAllowed;
        $subscription->ScansAllowed = $request->ScansAllowed;
        $subscription->Duration = $request->Duration;
        $subscription->Price = $request->Price;

        // Save the updated subscription
        $subscription->save();

        // Return a success response
        return redirect()->route('plans_abonnement');
    }

    public function chose_abonnement(){
         
        $Free = subscription::where('PlanName','Free')->first();
        $Standard = subscription::where('PlanName','Standard')->first();
        $Premium = subscription::where('PlanName','Premium')->first();
  
        $id_user = auth()->id();
        
        $user = User::find($id_user);
        
 
      return view('front.admin.Boss.chose_abonnement',compact('Free','Standard','Premium','user'));
 
     }

    public function buy_aboonement($id){
   
        $id_user = auth()->id();

        $user = User::find($id_user);
    
        $user->sub_id = $id;
     
    
        $user->save();
       

        return redirect()->back();
     }

     public function checkTrialPeriod()
{
    $user = auth()->user();

    $creationDate = Carbon::parse($user->created_at);
    $expiryDate = $creationDate->addDays(30);
   

    if (Carbon::now()->gt($expiryDate)) {
        // Les 30 jours sont écoulés, désactiver les menus ou effectuer d'autres actions nécessaires
    
        // Vous pouvez également envoyer une notification à l'utilisateur
        // $user->notify(new TrialPeriodExpired());
    }
}
}
