<?php

namespace App\Http\Middleware;

use App\Models\Felhasznalo;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    public function handle(Request $request, Closure $next)
    {

        $felhasznalo = Felhasznalo::where('id', Auth::id())->first();

            if ($felhasznalo && $felhasznalo->roleID == 3) {
                return $next($request);
            }

        return redirect()->route('dashboard')->with('error', 'Nincs jogosultságod a hozzáféréshez.');
    }
}
