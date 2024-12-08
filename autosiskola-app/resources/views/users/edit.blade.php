@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Felhasználó Szerkesztése</h2>

        <form method="POST" action="{{ route('users.update', $user->taj) }}">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="nev">Név:</label>
                <input type="text" class="form-control" id="nev" name="nev" value="{{ $user->nev }}" required>
            </div>

            <div class="form-group">
                <label for="szemelyi">Személyi szám:</label>
                <input type="text" class="form-control" id="szemelyi" name="szemelyi" value="{{ $user->szemelyi }}" required>
            </div>

            <div class="form-group">
                <label for="szulido">Születési dátum:</label>
                <input type="date" class="form-control" id="szulido" name="szulido" value="{{ $user->szulido->format('Y-m-d') }}" required>
            </div>

            <div class="form-group">
                <label for="taj">TAJ szám:</label>
                <input type="text" class="form-control" id="taj" name="taj" value="{{ $user->taj }}" required>
            </div>

            <div class="form-group">
                <label for="adoszam">Adószám:</label>
                <input type="text" class="form-control" id="adoszam" name="adoszam" value="{{ $user->adoszam }}" required>
            </div>

            <div class="form-group">
                <label for="szulhely">Születési hely:</label>
                <input type="text" class="form-control" id="szulhely" name="szulhely" value="{{ $user->szulhely }}" required>
            </div>

            <div class="form-group">
                <label for="elsosegelyvizsga">Elsősegély vizsga:</label>
                <select class="form-control" id="elsosegelyvizsga" name="elsosegelyvizsga" required>
                    <option value="1" {{ $user->elsosegelyvizsga ? 'selected' : '' }}>Igen</option>
                    <option value="0" {{ !$user->elsosegelyvizsga ? 'selected' : '' }}>Nem</option>
                </select>
            </div>

            <div class="form-group">
                <label for="szemuveg">Szemüveg szükséges:</label>
                <select class="form-control" id="szemuveg" name="szemuveg" required>
                    <option value="1" {{ $user->szemuveg ? 'selected' : '' }}>Igen</option>
                    <option value="0" {{ !$user->szemuveg ? 'selected' : '' }}>Nem</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Frissítés</button>
        </form>
    </div>
@endsection
