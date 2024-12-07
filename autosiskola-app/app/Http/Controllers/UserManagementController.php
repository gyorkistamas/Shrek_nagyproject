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
        $user = Felhasznalo::where('taj', $taj)->first();
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'Felhasználó sikeresen frissítve.');
    }
}

