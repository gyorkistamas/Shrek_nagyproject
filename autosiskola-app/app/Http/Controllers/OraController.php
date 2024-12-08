<?php

namespace App\Http\Controllers;

use App\Models\Ora;
use Illuminate\Http\Request;

class OraController extends Controller
{
    public function index()
    {
        $orak = Ora::all();
        return view('orak.index', compact('orak'));
    }

    public function create()
    {
        return view('orak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'datum' => 'required|date_format:Y-m-d\TH:i',
            'idotartam_perc' => 'required|integer',
            'oktato' => 'required|integer',
            'diak' => 'nullable|integer',
        ]);
    
        Ora::create($request->only(['datum', 'idotartam_perc', 'oktato', 'diak']));
    
        return redirect()->route('orak.index')->with('success', 'Óra sikeresen létrehozva.');
    }
    
    public function edit($oraID)
    {
        $ora = Ora::findOrFail($oraID);
        return view('orak.edit', compact('ora'));
    }

    public function update(Request $request, $oraID)
    {
        $request->validate([
            'datum' => 'required|date_format:Y-m-d\TH:i',
            'idotartam_perc' => 'required|integer',
            'oktato' => 'required|integer',
            'diak' => 'nullable|integer',
        ]);

        $ora = Ora::findOrFail($oraID);
        $ora->update($request->only(['datum', 'idotartam_perc', 'oktato', 'diak']));

        return redirect()->route('orak.index')->with('success', 'Óra sikeresen frissítve.');
    }

    public function destroy($oraID)
    {
        $ora = Ora::findOrFail($oraID);
        $ora->delete();

        return redirect()->route('orak.index')->with('success', 'Óra sikeresen törölve.');
    }
}
