<?php

namespace App\Http\Controllers;
    
use App\Models\User;
use Illuminate\Support\Arr;
use App\Models\subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    function __construct()
    {
        $this->middleware(['permission:Users-list']);
        // $this->middleware(['permission:product-create'], ['only' => ['create', 'store']]);
        // $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }
   
    public function index(Request $request) 
    {
        $data = User::latest()->get();
        return view('users.index',compact('data'));
    }
    

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
    

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
        
        // $subscription = subscription::where('PlanName','Free')->first();

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['Is_active'] = 3;
        // $input['sub_id'] =  $subscription->SubscriptionID;
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('flash_message','User created successfully');
    }
    
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
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
    
        return redirect()->route('users.index')
                        ->with('flash_message','User updated successfully');
    }
    
    public function destroy($id)
    {
        // dd($id);
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('flash_message','User deleted successfully');
    }
}