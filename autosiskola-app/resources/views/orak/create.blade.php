@extends('layouts.app')

@section('content')
    <h1>Új vizsga időpont létrehozása</h1>
    <form action="{{ route('orak.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="datum">Dátum</label>
            <input type="date" name="datum" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="idotartam_perc">Időtartam (perc)</label>
            <input type="number" name="idotartam_perc" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="oktato">Oktató ID</label>
            <input type="number" name="oktato" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="diak">Diák ID</label>
        <input type="number" name="diak" class="form-control">
    </div>
        <button type="submit" class="btn btn-success mt-3">Létrehozás</button>
    </form>
@endsection
