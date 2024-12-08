@extends('layouts.app')

@section('content')
    <h1>Vizsga időpont szerkesztése</h1>
    <form action="{{ route('orak.update', $ora->oraID) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
    <label for="datum">Időpont</label>
    <input type="datetime-local" 
           name="datum" 
           class="form-control" 
           value="{{ \Carbon\Carbon::parse($ora->datum)->format('Y-m-d\TH:i') }}" 
           required>
</div>
>
        
        <div class="form-group">
            <label for="idotartam_perc">Időtartam (perc)</label>
            <input type="number" name="idotartam_perc" class="form-control" value="{{ $ora->idotartam_perc }}" required>
        </div>
        
        <div class="form-group">
            <label for="oktato">Oktató ID</label>
            <input type="number" name="oktato" class="form-control" value="{{ $ora->oktato }}" required>
        </div>
        
        <div class="form-group">
            <label for="diak">Diák ID</label>
            <input type="number" name="diak" class="form-control" value="{{ $ora->diak }}">
        </div>
        
        <a href="{{ route('orak.index') }}" class="btn btn-secondary">Vissza</a>
        <button type="submit" class="btn btn-success mt-3">Frissítés</button>
    </form>
@endsection
