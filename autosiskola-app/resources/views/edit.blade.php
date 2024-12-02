@extends('layouts.app')

@section('content')
<div class="py-12" style="background-image: url('images/hatter.jpg'); background-position: center; background-attachment: fixed; background-size: cover; height: 100vh; width: 100%;">
<div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Felhasználó szerkesztése</h1>

        @if(session('status') == 'profile-updated')
            <div class="alert alert-success mb-6 bg-green-500 text-white p-4 rounded-lg">
                A felhasználói adat sikeresen frissítve!
            </div>
        @endif

        <h2><b>Amit nem akar megváltoztatni, hagyja szabadon</b></h2>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Név</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="{{ $felhasznalo->nev}}">
                @error('name')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="{{ auth()->user()->email }}">
                @error('email')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="szemelyi" class="block text-sm font-medium text-gray-700">Személyi szám:</label>
                <input type="text" name="szemelyi" id="szemelyi" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="{{ $felhasznalo->szemelyi}}">
                @error('szemelyi')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="szulido" class="block text-sm font-medium text-gray-700">Születési idő:</label>
                <input type="date" name="szulido" id="szulido" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="{{ $felhasznalo->szulido}}">
                @error('szulido')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="szulhely" class="block text-sm font-medium text-gray-700">Születési hely:</label>
                <input type="text" name="szulhely" id="szulhely" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="{{ $felhasznalo->szulhely}}">
                @error('szulhely')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Új jelszó</label>
                <input type="password" name="password" id="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('password')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Új jelszó megerősítése</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                Mentés
            </button>
        </form>
    </div>
</div>
</div>
@endsection
