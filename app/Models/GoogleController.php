<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Exception;


class GoogleController extends Model
{
    use HasFactory;
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function Callback()
    {
        $socialiteUser = Socialite::driver('google')->user();
        dd($socialiteUser);

        $existingUser = User::where('email', $socialiteUser->email)->first();

        if ($existingUser) {
            auth()->login($existingUser);
            return redirect('/dashboard');
        }

        $user = User::updateOrCreate([
            'id' => $socialiteUser->id,
            'provider' => 'google', 
        ], [
            'name' => $socialiteUser->name,
            'email' => $socialiteUser->email,
        ]);

        auth()->login($user);

        return redirect('/dashboard');
    }
}


 
 