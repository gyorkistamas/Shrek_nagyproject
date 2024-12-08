@extends('layouts.app')

@section('content')
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
                    <td>
                        <a href="{{ route('orak.edit', $ora->oraID) }}" class="btn btn-warning">Szerkesztés</a>

                        <form action="{{ route('orak.destroy', $ora->oraID) }}" method="POST" style="display:inline-block;">
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

