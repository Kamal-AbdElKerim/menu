<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\subscription;



class SubscriptionsController extends Controller
{
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

        return redirect()->back();

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
}
