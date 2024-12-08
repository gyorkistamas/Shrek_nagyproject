@extends('layouts.app')

@section('content')

<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold text-center text-white mb-8">Vizsga szerkesztése</h1>

    <div class="bg-white shadow-lg rounded-lg p-6 max-w-4xl mx-auto">
        <form method="POST" action="{{ route('vizsga.update', $vizsga->vizsgaID) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="datum" class="block text-sm font-medium text-gray-700">Dátum</label>
                <input type="datetime-local" name="datum" id="datum" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('datum', \Carbon\Carbon::parse($vizsga->datum)->format('Y-m-d\TH:i:s')) }}"                required>
                @error('datum')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="sikeresseg" class="block text-sm font-medium text-gray-700">Sikeresség</label>
                <select name="sikeresseg" id="sikeresseg" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <option value="" disabled>Válassz...</option>
                    <option value="1" {{ old('sikeresseg', $vizsga->sikeresseg) == 1 ? 'selected' : '' }}>Sikeres</option>
                    <option value="0" {{ old('sikeresseg', $vizsga->sikeresseg) == 0 ? 'selected' : '' }}>Sikertelen</option>
                </select>
                @error('sikeresseg')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="vizsgazo" class="block text-sm font-medium text-gray-700">Vizsgázó ID</label>
                <input type="number" name="vizsgazo" id="vizsgazo" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('vizsgazo', $vizsga->vizsgazo) }}" required>
                @error('vizsgazo')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="oktato" class="block text-sm font-medium text-gray-700">Oktató ID</label>
                <input type="number" name="oktato" id="oktato" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('oktato', $vizsga->oktato) }}" required>
                @error('oktato')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="vizsgaztato" class="block text-sm font-medium text-gray-700">Vizsgáztató ID</label>
                <input type="number" name="vizsgaztato" id="vizsgaztato" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('vizsgaztato', $vizsga->vizsgaztato) }}" required>
                @error('vizsgaztato')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="w-full bg-lime-400 hover:bg-lime-500 text-dark font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                Módosítás mentése
            </button>
        </form>
    </div>
</div>
@endsection
