@extends('layouts.app')

@section('content')
<style>
        body {
            background-image: url('{{ asset('images/hatter.jpg') }}');
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #00ff00;
    }

    .btn-primary {
        display: block;
        margin: 20px auto;
        background-color: #00ff00;
        color: #121212;
        border: none;
        font-weight: bold;
        text-align: center;
        width: 200px;
        padding: 10px 0;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #009900;
        color: #fff;
    }

    .table {
        width: 90%;
        margin: 0 auto;
        background-color: #1e1e1e;
        border-radius: 10px;
        overflow: hidden;
    }

    .table th, 
    .table td {
        text-align: center;
        padding: 15px;
        color: #00ff00;
        border: 1px solid #333;
    }

    .table th {
        background-color: #333;
        font-size: 16px;
        text-transform: uppercase;
    }

    .table tr:nth-child(even) {
        background-color: #1a1a1a;
    }

    .table tr:hover {
        background-color: #292929;
    }

    .btn-warning {
        background-color: #ffaa00;
        color: #121212;
        border: none;
        font-weight: bold;
        padding: 8px 12px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #ff8800;
        color: #fff;
    }

    .btn-danger {
        background-color: #ff4444;
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

    form {
        display: inline-block;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        gap: 10px;
    }
</style>

<h1>Vizsga időpontok</h1>

<a href="{{ route('orak.create') }}" class="btn btn-primary">Új vizsga időpont</a>

<table class="table mt-4">
    <thead>
        <tr>
            <th>Időpont</th>
            <th>Időtartam (perc)</th>
            <th>Oktató</th>
            <th>Diák</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orak as $ora)
            <tr>
                <td>{{ \Carbon\Carbon::parse($ora->datum)->format('Y-m-d H:i') }}</td>
                <td>{{ $ora->idotartam_perc }}</td>
                <td>{{ $ora->oktato }}</td>
                <td>{{ $ora->diak ?? 'N/A' }}</td>
                <td class="btn-container">
                    <a href="{{ route('orak.edit', $ora->oraID) }}" class="btn btn-warning">Szerkesztés</a>

                    <form action="{{ route('orak.destroy', $ora->oraID) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Biztosan törölni szeretnéd ezt az időpontot?')">Törlés</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
