<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    // Example: Fetch Felhasznalo by ID (not by taj)
    $felhasznalo = Felhasznalo::where('id', Auth::id())->first();

    return view('dashboard', compact('felhasznalo'));
}
}
