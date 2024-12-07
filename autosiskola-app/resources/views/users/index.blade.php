@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Felhasználók Listája</h2>
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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
