<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\subscription;
use GuzzleHttp\Psr7\Message;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('front.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        $user = auth()->user();
    
        if ($user) {
            $subscription = Subscription::find($user->sub_id);
            if ($subscription) {
                $creationDate = Carbon::parse($user->created_at);
                $expiryDate = $creationDate->addDays($subscription->Duration);
    
                if (Carbon::now()->gt($expiryDate)) {
                    session(['Abonnement' => 'Abonnement_end']);
                    return redirect()->route('chose_abonnement');
                }
            }
        }
    
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
