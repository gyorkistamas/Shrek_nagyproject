<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = Felhasznalo::all();
        return view('users.index', compact('users'));
    }

    public function edit($taj)
    {
        $user = Felhasznalo::where('taj', $taj)->first();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $taj)
    {
        // Validációs szabályok
        $validatedData = $request->validate([
            'nev' => ['nullable', 'string', 'unique:felhasznalo,nev'],
            'taj' => ['required', 'string', 'min:9', 'max:9'],
            'szemelyi' => ['required', 'string', 'min:8', 'max:8'],
            'adoszam' => ['required', 'string', 'min:10', 'max:10'],
            'szulido' => ['required', 'date'],
            'szulhely' => ['required', 'string'],
            'elsosegelyvizsga' => ['nullable', 'boolean'],
            'szemuveg' => ['nullable', 'boolean'],
        ]);
    
        $user = Felhasznalo::where('taj', $taj)->first();
        if (!$user) {
            return redirect()->route('users.index')->with('error', 'Felhasználó nem található.');
        }
    
        $user->update($validatedData);
    
        return redirect()->route('users.index')->with('success', 'Felhasználó sikeresen frissítve.');
    }

    public function destroy($taj)
    {
        $user = Felhasznalo::where('taj', $taj)->first();
        if (!$user) {
            return redirect()->route('users.index')->with('error', 'Felhasználó nem található.');
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Felhasználó sikeresen törölve.');
    }
    
}

