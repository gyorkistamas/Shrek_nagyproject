<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use App\Models\Ora;
use App\Models\Vizsga;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    // Example: Fetch Felhasznalo by ID (not by taj)
    $felhasznalo = Felhasznalo::where('id', Auth::id())->first();
    $vizsgak = Vizsga::with(['vizsgazo', 'oktato', 'vizsgaztato'])->get();

    $orak = Ora::all();
    return view('dashboard', compact('felhasznalo','orak','vizsgak'));
}
}
