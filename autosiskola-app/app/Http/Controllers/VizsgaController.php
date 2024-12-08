<?php

namespace App\Http\Controllers;

use App\Models\Vizsga;
use Illuminate\Http\Request;

class VizsgaController extends Controller
{
    /* 
    Schema::create('vizsga', function (Blueprint $table) {
            $table->bigInteger('vizsgaID')->primary();
            $table->date('datum');
            $table->boolean('sikeresseg');
            $table->bigInteger('vizsgazo');
            $table->bigInteger('oktato');
            $table->bigInteger('vizsgaztato');
        });
    */
    public function index()
    {
        $vizsga = Vizsga::all();
        return view('vizsga.index', compact('vizsga'));
    }

    public function create()
    {
        return view('vizsga.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'datum' => 'required|date_format:Y-m-d\TH:i',
            'sikeresseg' => 'required|boolean',
            'vizsgazo' => 'required|integer',
            'oktato' => 'required|integer',
            'vizsgaztato' => 'required|integer'
        ]);
    
        Vizsga::create($request->only(['datum', 'sikeresseg', 'vizsgazo', 'oktato', 'vizsgaztato']));
    
        return redirect()->route('vizsga.index')->with('success', 'Vizsga sikeresen létrehozva.');
    }
    
    public function edit($vizsgaID)
    {
        $ora = Vizsga::findOrFail($vizsgaID);
        return view('vizsga.edit', compact('vizsga'));
    }

    public function update(Request $request, $vizsgaID)
    {
        $request->validate([
            'datum' => 'required|date_format:Y-m-d\TH:i',
            'idotartam_perc' => 'required|integer',
            'oktato' => 'required|integer',
            'diak' => 'nullable|integer',
        ]);

        $ora = Vizsga::findOrFail($vizsgaID);
        $ora->update($request->only(['datum', 'sikeresseg', 'vizsgazo', 'oktato', 'vizsgaztato']));

        return redirect()->route('orak.index')->with('success', 'Vizsga sikeresen frissítve.');
    }

    public function destroy($vizsgaID)
    {
        $vizsga = Vizsga::findOrFail($vizsgaID);
        $vizsga->delete();

        return redirect()->route('vizsga.index')->with('success', 'Vizsga sikeresen törölve.');
    }
}
