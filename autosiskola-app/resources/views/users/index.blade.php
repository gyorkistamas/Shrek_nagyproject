@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Felhasználók Listája</h2>

        <form method="GET" action="{{ route('users.search') }}" class="mb-3">
            @csrf
            <div class="form-group">
                <label for="taj">Keresés TAJ szám alapján:</label>
                <input type="text" id="taj" name="taj" class="form-control" placeholder="Írd be a TAJ számot" required>
            </div>
            <button type="submit" class="btn btn-primary">Keresés</button>
        </form>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Neve</th>
                    <th>TAJ</th>
                    <th>Akciók</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->nev }}</td>
                        <td>{{ $user->taj }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->taj) }}" class="btn btn-primary">Szerkesztés</a>

                            <form action="{{ route('users.delete', $user->taj) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Biztosan törli ezt a felhasználót?')">Törlés</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
