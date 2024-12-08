@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">

    <h1 class="text-4xl font-bold text-center text-white mb-8">Vizsgák listázása</h1>

    <div class="mb-6 text-left">
        <a href="{{ route('vizsga.create') }}" class="inline-block bg-red-500 hover:bg-red-600 text-dark font-semibold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            Új vizsga hozzáadása
        </a>
    </div>

    <div class="overflow-hidden rounded-lg shadow-lg">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-lime-400 text-dark uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Vizsga ID</th>
                    <th class="py-3 px-6 text-left">Dátum</th>
                    <th class="py-3 px-6 text-left">Sikeresség</th>
                    <th class="py-3 px-6 text-left">Vizsgázó</th>
                    <th class="py-3 px-6 text-left">Oktató</th>
                    <th class="py-3 px-6 text-left">Vizsgáztató</th>
                    <th class="py-3 px-6 text-left">Műveletek</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @foreach ($vizsga as $vizsga)
                    <tr class="hover:bg-gray-300">
                        <td class="py-3 px-6">{{ $vizsga->vizsgaID }}</td>
                        <td class="py-3 px-6">{{ $vizsga->datum }}</td>
                        <td class="py-3 px-6">
                            @if($vizsga->sikeresseg)
                                <span class="bg-green-300 text-green-800 py-1 px-3 rounded-full text-xs">Sikeres</span>
                            @else
                                <span class="bg-red-300 text-red-800 py-1 px-3 rounded-full text-xs">Sikertelen</span>
                            @endif
                        </td>
                        <td class="py-3 px-6">{{ $vizsga->vizsgazo }}</td>
                        <td class="py-3 px-6">{{ $vizsga->oktato }}</td>
                        <td class="py-3 px-6">{{ $vizsga->vizsgaztato }}</td>

                        <td class="py-3 px-6 flex space-x-2">
                            <a href="{{ route('vizsga.edit', $vizsga->vizsgaID) }}" class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50">
                                Szerkesztés
                            </a>
                            <form action="{{ route('vizsga.destroy', $vizsga->vizsgaID) }}" method="POST" onsubmit="return confirm('Biztosan törölni szeretnéd ezt a vizsgát?');" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                                    Törlés
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
