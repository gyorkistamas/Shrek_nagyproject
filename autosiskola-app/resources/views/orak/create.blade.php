@extends('layouts.app')

@section('content')
<style>
    /* Az egész oldalra alkalmazott háttérkép */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-image: url('{{ asset('images/hatter.jpg') }}') !important;
        background-position: center !important;
        background-attachment: fixed !important;
        background-size: cover !important;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #00ff00;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #00ff00;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
        color: #00ff00;
        text-transform: uppercase;
    }

    .form-control {
        width: 50%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #1e1e1e;
        color: #00ff00;
    }

    .form-control:focus {
        outline: none;
        border: 2px solid #00ff00;
        background-color: #292929;
    }

    .btn {
        display: inline-block;
        text-align: center;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn-primary {
        background-color: #00ff00;
        color: #121212;
        border: none;
    }

    .btn-primary:hover {
        background-color: #009900;
        color: #fff;
    }

    .btn-secondary {
        background-color: #666;
        color: #fff;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #444;
        color: #fff;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    form {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        background-color: #1e1e1e;
        padding: 20px;
        border-radius: 10px;
    }
</style>

<h1>Új Vizsga Időpont Létrehozása</h1>

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

    <div class="btn-container">
        <a href="{{ route('orak.index') }}" class="btn btn-secondary">Vissza</a>
        <button type="submit" class="btn btn-primary">Létrehozás</button>
    </div>
</form>
@endsection
