@extends('layouts.app')

@section('content')
<style>



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
        font-weight: bold;
        padding: 8px 12px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #009900;
        color: #fff;
    }

    .btn-danger {
        background-color: #ff0000;
        color: #fff;
        border: none;
        font-weight: bold;
        padding: 8px 12px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #cc0000;
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

    .alert {
        text-align: center;
        color: #ff0000;
        font-weight: bold;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #00ff00;
        color: #00ff00;
    }

    th {
        background-color: #121212;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #1a1a1a;
    }

    tr:nth-child(odd) {
        background-color: #1e1e1e;
    }

    tr:hover {
        background-color: #333;
    }

    .table {
        margin-top: 20px;
    }

    .form-button-container {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

</style>

<div class="container">
    <h2>Felhasználók Listája</h2>

    <form method="GET" action="{{ route('users.search') }}" class="mb-3">
        @csrf
        <div class="form-group">
            <label for="taj">Keresés TAJ szám alapján:</label>
            <input type="text" id="taj" name="taj" class="form-control" placeholder="Írd be a TAJ számot" required>
        </div>

        <!-- Gomb középre helyezése -->
        <div class="form-button-container">
            <button type="submit" class="btn btn-primary">Keresés</button>
        </div>
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
