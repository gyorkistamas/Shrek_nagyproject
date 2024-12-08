@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('orak.store') }}">
    @csrf
    <div class="form-group">
    <label for="datum">Időpont</label>
    <input type="datetime-local" 
           name="datum" 
           class="form-control" 
           value="{{ old('datum') }}" 
           required>
</div>


    <div class="form-group">
        <label for="idotartam_perc">Időtartam (perc)</label>
        <input type="number" name="idotartam_perc" id="idotartam_perc" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="oktato">Oktató ID</label>
        <input type="number" name="oktato" id="oktato" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="diak">Diák ID</label>
        <input type="number" name="diak" id="diak" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Létrehozás</button>
</form>

@endsection
