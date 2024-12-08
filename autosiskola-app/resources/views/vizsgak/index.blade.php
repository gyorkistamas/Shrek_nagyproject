@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold text-center text-white mb-8">Vizsgák listázása</h1>

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
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @foreach ($vizsga as $vizsga)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $vizsga->vizsgaID }}</td>
                        <td class="py-3 px-6">{{ $vizsga->datum }}</td>
                        <td class="py-3 px-6">
                            @if($vizsga->sikeresseg)
                                <span class="bg-green-200 text-green-800 py-1 px-3 rounded-full text-xs">Sikeres</span>
                            @else
                                <span class="bg-red-200 text-red-800 py-1 px-3 rounded-full text-xs">Sikertelen</span>
                            @endif
                        </td>
                        <td class="py-3 px-6">{{ $vizsga->vizsgazo }}</td>
                        <td class="py-3 px-6">{{ $vizsga->oktato }}</td>
                        <td class="py-3 px-6">{{ $vizsga->vizsgaztato }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
