<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\felhasznalo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:200', 'unique:bejelentkezes,email'],
            'password' => ['required', 'string', 'min:3', 'max:100', 'confirmed'],
            'nev' => ['required', 'string', 'unique:felhasznalo,nev'],
            'taj' => ['required', 'string', 'min:9','max:9'],
            'szemelyi' => ['required', 'string', 'min:8','max:8'],
            'adoszam' => ['required', 'string', 'min:10','max:10'],
            'szulido' => ['required', 'date'],
            'szulhely' => ['required', 'string'],
            'elsosegelyvizsga' => ['nullable','boolean'],
            'szemuveg' => ['nullable','boolean'],
        ]);
    
    
        do {
            $randomId = random_int(1000000000, 9999999999);
        } while (DB::table('bejelentkezes')->where('felhasznalo', $randomId)->exists());
    
        $user = User::create([
            'felhasznalo' => $randomId,
            'email' => $request->email,
            'jelszo' => Hash::make($request->password),
        ]);
    
        $felhasznalo = felhasznalo::create([
            'id' => $randomId,
            'nev' => $request->nev,
            'taj' => $request->taj,
            'szemelyi' => $request->szemelyi,
            'adoszam' => $request->adoszam,
            'szulido' => $request->szulido,
            'szulhely' => $request->szulhely,
            'elsosegelyvizsga' => $request->elsosegelyvizsga,
            'szemuveg' => $request->szemuveg,
            'roleID' => 2,
        ]);
    
        Auth::login($user);
    

        return redirect()->route('dashboard');
    }
}