<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }


    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $user = \App\Models\User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->jelszo)) {
        Auth::login($user, $request->remember);
        return redirect()->intended(route('dashboard'));
    }

    return back()->withErrors([
        'email' => 'Az adatok nem egyeznek...',
    ]);
}



    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
