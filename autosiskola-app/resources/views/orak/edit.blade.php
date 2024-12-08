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

        form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
    </style>

    <h1>Vizsga időpont szerkesztése</h1>

    <form action="{{ route('orak.update', $ora->oraID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="datum">Időpont</label>
            <input type="datetime-local" 
                   name="datum" 
                   class="form-control" 
                   value="{{ \Carbon\Carbon::parse($ora->datum)->format('Y-m-d\TH:i') }}" 
                   required>
        </div>

        <div class="form-group">
            <label for="idotartam_perc">Időtartam (perc)</label>
            <input type="number" 
                   name="idotartam_perc" 
                   class="form-control" 
                   value="{{ $ora->idotartam_perc }}" 
                   required>
        </div>

        <div class="form-group">
            <label for="oktato">Oktató ID</label>
            <input type="number" 
                   name="oktato" 
                   class="form-control" 
                   value="{{ $ora->oktato }}" 
                   required>
        </div>

        <div class="form-group">
            <label for="diak">Diák ID</label>
            <input type="number" 
                   name="diak" 
                   class="form-control" 
                   value="{{ $ora->diak }}"/>
        </div>

        <div class="btn-container">
            <a href="{{ route('orak.index') }}" class="btn btn-secondary">Vissza</a>
            <button type="submit" class="btn btn-success">Frissítés</button>
        </div>
    </form>
@endsection
