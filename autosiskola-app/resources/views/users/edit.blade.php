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

            <button type="submit" class="btn btn-success">Frissítés</button>
        </form>
    </div>
@endsection
