<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Felhasznalo;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    { 
        $user = auth()->user();
        $felhasznalo = Felhasznalo::where('id', auth()->user()->felhasznalo)->first();
            $validated = $request->validate([
                'email' => ['nullable', 'string', 'email', 'max:200', 'unique:bejelentkezes,email,' . $user->id],
                'password' => ['nullable', 'string', 'min:3', 'max:100', 'confirmed'],
                'nev' => ['nullable', 'string', 'unique:felhasznalo,nev'],
                'szemelyi' => ['nullable', 'string', 'min:8','max:8'],
                'szulido' => ['nullable', 'date'],
                'szulhely' => ['nullable', 'string'],
                'elsosegelyvizsga' => ['nullable','boolean'],
                'szemuveg' => ['nullable','boolean'],
            ]);       
        echo($request->nev);
        if (!empty($validated['nev'])) {
            $felhasznalo->nev = $validated['nev'];
        }
        if (!empty($validated['email'])) {
            $user->email = $validated['email'];
        }
        if (!empty($validated['szemelyi'])) {
            $felhasznalo->szemelyi = $validated['szemelyi'];
        }
        if (!empty($validated['szulido'])) {
            $felhasznalo->szulido = $validated['szulido'];
        }
        if (!empty($validated['szulhely'])) {
            $felhasznalo->szulhely = $validated['szulhely'];
        }
        if (!empty($validated['elsosegelyvizsga']) && $validated['elsosegelyvizsga']) 
        {
            $felhasznalo->elsosegelyvizsga = 1;
        }else {
            $felhasznalo->elsosegelyvizsga = 0;
        }
        if (!empty($validated['szemuveg']) && $validated['szemuveg']) 
        {
            $felhasznalo->szemuveg = 1;
        }else {
            $felhasznalo->szemuveg = 0;
        }
        if (!empty($validated['password'])) {
            $user->jelszo = Hash::make($validated['password']);
        }

        if (!$user->save()) {
            dd('User save failed', $user->getAttributes());
        }
        if (!$felhasznalo->save()) {
            dd('Felhasznalo save failed', $felhasznalo->getAttributes());
        }
        return redirect()->back()->with('success', 'Profile updated successfully.');   
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
