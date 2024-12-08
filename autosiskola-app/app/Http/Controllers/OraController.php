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
            'datum' => 'required|date',
            'idotartam_perc' => 'required|integer',
            'oktato' => 'required|integer',
            'diak' => 'nullable|integer',
        ]);
    
        Ora::create($request->all());
    
        return redirect()->route('orak.index');
    }
    

    public function edit($oraID)
    {
        $ora = Ora::findOrFail($oraID);
        return view('orak.edit', compact('ora'));
    }

    public function update(Request $request, $oraID)
    {

        $request->validate([
            'datum' => 'required|date',
            'idotartam_perc' => 'required|integer',
            'oktato' => 'required|integer',
            'diak' => 'nullable|integer',
        ]);

        $ora = Ora::findOrFail($oraID);
        $ora->update($request->all());

        return redirect()->route('orak.index');
    }
}
