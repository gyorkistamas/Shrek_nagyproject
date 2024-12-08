@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Felhasználó Szerkesztése</h2>

        <form method="POST" action="{{ route('users.update', $user->taj) }}">
            @csrf
            @method('PUT')  <!-- Használjuk a PUT metódust -->

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
                <select class="form-control" id="elsosegelyvizsga" name="elsosegelyvizsga" required>
                    <option value="1" {{ old('elsosegelyvizsga', $user->elsosegelyvizsga) == 1 ? 'selected' : '' }}>Igen</option>
                    <option value="0" {{ old('elsosegelyvizsga', $user->elsosegelyvizsga) == 0 ? 'selected' : '' }}>Nem</option>
                </select>
            </div>

            <div class="form-group">
                <label for="szemuveg">Szemüveg szükséges:</label>
                <select class="form-control" id="szemuveg" name="szemuveg" required>
                    <option value="1" {{ old('szemuveg', $user->szemuveg) == 1 ? 'selected' : '' }}>Igen</option>
                    <option value="0" {{ old('szemuveg', $user->szemuveg) == 0 ? 'selected' : '' }}>Nem</option>
                </select>
            </div>

            <div class="form-group">
    <label for="roleID">Admin:</label>
    <input type="checkbox" id="roleID" name="roleID" value="3" {{ old('roleID', $user->roleID) == 3 ? 'checked' : '' }}>
</div>


            <button type="submit" class="btn btn-success">Frissítés</button>

            <a href="{{ route('users.index') }}" class="btn btn-secondary">Vissza</a>
        </form>
    </div>
@endsection
