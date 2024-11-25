@extends('layouts.app')

@section('content')
<div class="py-12" style="background-image: url('images/hatter.jpg'); background-position: center; background-attachment: fixed; background-size: cover; height: 100vh; width: 100%;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 bg-gray-100">
                <h2 class="text-2xl font-bold text-gray-800">Üdvözöljük a Dashboard-on!</h2>
                <p class="mt-4 text-lg text-gray-600">Itt láthatja a felhasználói információkat és az alkalmazás főbb funkcióit.</p>
            <div class="p-6 bg-gray-100">
                <img src="{{ asset('images/user.png') }}" style="width: 150px; margin: 0 auto 0 auto;" alt="Logo">
                <p style="text-align: center; font-size: 20px; padding-top: 5px;">Szia, {{ Auth::user()->felhasznalo }}!</p>
            </div>
                <!-- Felhasználói adatok -->
                <div class="mt-6 p-4 bg-white shadow-sm rounded-lg">
                    <h3 class="text-xl font-medium text-gray-700">Felhasználói adatok:</h3>
                    <div class="mt-4">
                        <p class="text-sm text-gray-600"><strong>Név:</strong> {{ Auth::user()->felhasznalo }}</p>
                        <p class="text-sm text-gray-600"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p class="text-sm text-gray-600"><strong>Regisztrálva:</strong> {{ Auth::user()->created_at->format('Y-m-d') }}</p>
                    </div>
                </div>

                <!-- Aktivitások vagy egyéb információk -->
                <div class="mt-6 p-4 bg-white shadow-sm rounded-lg">
                    <h3 class="text-xl font-medium text-gray-700">Aktivitás:</h3>
                    <p class="text-gray-600 mt-2">Itt jeleníthet meg különböző aktivitásokat, statisztikákat, és egyéb információkat, amelyek az alkalmazás funkcionalitásához tartoznak.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
