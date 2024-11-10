@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('images/hatter.jpg'); background-position: center; background-attachment: fixed; background-size: cover; height: 100vh; width: 100%;">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Bejelentkezés</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="ml-2 block text-sm font-medium text-gray-700">Email cím</label>
                <input type="email" name="email" id="email" size="40" placeholder="Add meg az email címed..." class="ml-2 mr-2 mt-1 block px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="ml-2 text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="ml-2 block text-sm font-medium text-gray-700">Jelszó</label>
                <input type="password" name="password" id="password" size="40" placeholder="Add meg a jelszavad..." class="ml-2 mr-2 mt-1 block px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
                @error('password')
                    <span class="ml-2 text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input type="checkbox" name="remember" id="remember" class="ml-2 text-indigo-600 focus:ring-indigo-500 h-4 w-4">
                <label for="remember" class="ml-2 block text-sm text-gray-900">Emlékezz rám</label>
            </div>

            <div class="flex justify-center">
                <button type="submit" style="background-color:#0eb000;" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Bejelentkezés
                </button>
            </div>

        </form>

        <!-- Regisztráció link -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Nincs még fiókod? 
                <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-700 font-medium">Regisztrálj most!</a>
            </p>
        </div>
    </div>
</div>
@endsection
