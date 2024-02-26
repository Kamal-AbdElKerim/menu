<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\restaurant;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OperateurController extends Controller
{
  
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session()->has('Abonnement')) {
                abort(403, 'Abonnement has ended');
            }
            return $next($request);
        });

        $this->middleware(['permission:Operateur_list']);
        // $this->middleware(['permission:product-create'], ['only' => ['create', 'store']]);
        // $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }
   
    public function index(Request $request) 
    {
        $id =Auth()->id() ;
       $restaurant = restaurant::where('UserID',$id)->first() ;
        $data = User::where('restaurants_id',$restaurant->RestaurantID)->latest()->get();
        return view('Operateur.index',compact('data'));
    }
    

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('Operateur.create',compact('roles'));
    }
    

    public function store(Request $request)
    {
       
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
      
        $id =Auth()->id() ;
        $restaurant = restaurant::where('UserID',$id)->first() ;
        $users = user::where('id',$restaurant->UserID)->first() ;
   
        $request['restaurants_id'] = $restaurant->RestaurantID ;
        $request['sub_id'] = $users->sub_id ;
      
        $input = $request->all();
      
        $input['password'] = Hash::make($input['password']);
        // dd($input);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

       
    
        return redirect()->route('Operateur.index')
                        ->with('success','User created successfully');
    }
    
    public function show($id)
    {
        $user = User::find($id);
        return view('Operateur.show',compact('user'));
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('Operateur.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:Operateur,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('Operateur.index')
                        ->with('success','User updated successfully');
    }
    
    public function destroy($id)
    {
        // dd($id);
        User::find($id)->delete();
        return redirect()->route('Operateur.index')
                        ->with('success','User deleted successfully');
    }
}
