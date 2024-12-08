@extends('layouts.app')

@section('content')
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-image: url('{{ asset('images/hatter.jpg') }}') !important;
        background-position: center !important;
        background-attachment: fixed !important;
        background-size: cover !important;
    }


    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #00ff00;
    }

    .container {
    width: 100%;
    max-width: 900px;
    background-color: transparent;
    padding: 20px;
    border-radius: 10px;
    margin: 0 auto;
    
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

    .form-control, .form-select {
        width: 50%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #1e1e1e;
        color: #00ff00;
    }

    .form-control:focus, .form-select:focus {
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

    .btn-success {
        background-color: #00ff00;
        color: #121212;
        border: none;
    }

    .btn-success:hover {
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

    .alert {
        text-align: center;
        color: #ff0000;
        font-weight: bold;
        margin-bottom: 20px;
    }

    form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
</style>

<div class="container">
    <h2>Felhasználó Szerkesztése</h2>

    <form method="POST" action="{{ route('users.update', $user->taj) }}">
        @csrf
        @method('PUT')  <!-- PUT metódus -->

        <!-- Hibák megjelenítése -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="nev">Név:</label>
            <input type="text" class="form-control" id="nev" name="nev" value="{{ old('nev', $user->nev) }}" required>
        </div>

        <div class="form-group">
            <label for="szemelyi">Személyi szám:</label>
            <input type="text" class="form-control" id="szemelyi" name="szemelyi" value="{{ old('szemelyi', $user->szemelyi) }}" required>
        </div>

        <div class="form-group">
            <label for="szulido">Születési dátum:</label>
            <input type="date" class="form-control" id="szulido" name="szulido" value="{{ old('szulido', $user->szulido->format('Y-m-d')) }}" required>
        </div>

        <div class="form-group">
            <label for="taj">TAJ szám:</label>
            <input type="text" class="form-control" id="taj" name="taj" value="{{ old('taj', $user->taj) }}" required>
        </div>

        <div class="form-group">
            <label for="adoszam">Adószám:</label>
            <input type="text" class="form-control" id="adoszam" name="adoszam" value="{{ old('adoszam', $user->adoszam) }}" required>
        </div>

        <div class="form-group">
            <label for="szulhely">Születési hely:</label>
            <input type="text" class="form-control" id="szulhely" name="szulhely" value="{{ old('szulhely', $user->szulhely) }}" required>
        </div>

        <div class="form-group">
            <label for="elsosegelyvizsga">Elsősegély vizsga:</label>
            <select class="form-select" id="elsosegelyvizsga" name="elsosegelyvizsga" required>
                <option value="1" {{ old('elsosegelyvizsga', $user->elsosegelyvizsga) == 1 ? 'selected' : '' }}>Igen</option>
                <option value="0" {{ old('elsosegelyvizsga', $user->elsosegelyvizsga) == 0 ? 'selected' : '' }}>Nem</option>
            </select>
        </div>

        <div class="form-group">
            <label for="szemuveg">Szemüveg szükséges:</label>
            <select class="form-select" id="szemuveg" name="szemuveg" required>
                <option value="1" {{ old('szemuveg', $user->szemuveg) == 1 ? 'selected' : '' }}>Igen</option>
                <option value="0" {{ old('szemuveg', $user->szemuveg) == 0 ? 'selected' : '' }}>Nem</option>
            </select>
        </div>

        <div class="form-group">
            <label for="roleID">Admin:</label>
            <input type="checkbox" id="roleID" name="roleID" value="3" {{ old('roleID', $user->roleID) == 3 ? 'checked' : '' }}>
        </div>

        <div class="btn-container">
            <button type="submit" class="btn btn-success">Frissítés</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Vissza</a>
        </div>
    </form>
</div>
@endsection
