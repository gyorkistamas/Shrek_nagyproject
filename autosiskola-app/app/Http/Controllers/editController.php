<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use Auth;
use Illuminate\Http\Request;

class editController extends Controller
{
    public function edit()
{
    // Example: Fetch Felhasznalo by ID (not by taj)
    $felhasznalo = Felhasznalo::where('id', Auth::id())->first();

    return view('edit', compact('felhasznalo'));
}
}
