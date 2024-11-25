<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    // Regisztrációs űrlap megjelenítése
    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:200', 'unique:bejelentkezes,email'],
            'password' => ['required', 'string', 'min:3', 'max:100', 'confirmed'],
        ]);


        do {
            $randomId = random_int(1000000000, 9999999999);
        } while (DB::table('bejelentkezes')->where('felhasznalo', $randomId)->exists());

 
        $user = User::create([
            'felhasznalo' => $randomId,
            'email' => $request->email,
            'jelszo' => Hash::make($request->password),
        ]);


        Auth::login($user);


        return redirect()->route('dashboard');
    }
}
