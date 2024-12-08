@extends('layouts.app')

@section('content')
<div class="py-12" style="background-image: url('images/hatter.jpg'); background-position: center; background-attachment: fixed; background-size: cover; height: 100vh; width: 100%;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($felhasznalo->roleID == 3)
                    <div class="mt-6 p-4 bg-white shadow-sm rounded-lg">
                        <h3 class="text-xl font-medium text-gray-700">Adminisztrátori Funkciók:</h3>
                        <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                            {{ ('Felhasználók kezelése') }}
                        </x-nav-link>
                        <x-nav-link :href="route('orak.index')" :active="request()->routeIs('orak.index')">
                            {{ ('Óra időpontok kezelése') }}
                        </x-nav-link>
                        <x-nav-link :href="route('vizsga.index')" :active="request()->routeIs('vizsga.index')">
                            {{ ('Vizsga időpontok kezelése') }}
                        </x-nav-link>
                    </div>
                @endif
            <div class="p-6 bg-gray-100">
                <h2 class="text-2xl font-bold text-gray-800">Üdvözöljük a Dashboard-on!</h2>
                <p class="mt-4 text-lg text-gray-600">Itt láthatja a felhasználói információkat és az alkalmazás főbb funkcióit.</p>
            <div class="p-6 bg-gray-100">
                <img src="{{ asset('images/user.png') }}" style="width: 150px; margin: 0 auto 0 auto;" alt="Logo">
                <p style="text-align: center; font-size: 20px; padding-top: 5px;">Szia, {{ $felhasznalo->nev }}!</p>
            </div>
                <div class="mt-6 p-4 bg-white shadow-sm rounded-lg">
                    <h3 class="text-xl font-medium text-gray-700">Felhasználói adatok:</h3>
                    <div class="mt-4">
                        <p class="text-sm text-gray-600"><strong>Név:</strong> {{ $felhasznalo->nev }}</p>
                        <p class="text-sm text-gray-600"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p class="text-sm text-gray-600"><strong>Regisztrálva:</strong> {{ Auth::user()->created_at->format('Y-m-d') }}</p>
                        <p class="text-sm text-gray-600"><strong>Taj szám:</strong> {{ $felhasznalo->taj }}</p>
                        <p class="text-sm text-gray-600"><strong>Személyi azonosító:</strong> {{ $felhasznalo->szemelyi }}</p>
                        <p class="text-sm text-gray-600"><strong>Adószám:</strong> {{ $felhasznalo->adoszam }}</p>
                        <p class="text-sm text-gray-600"><strong>Születési idő:</strong> {{ $felhasznalo->szulido }}</p>
                        <p class="text-sm text-gray-600"><strong>Születési hely:</strong> {{ $felhasznalo->szulhely }}</p>
                        @if ($felhasznalo->elsosegelyvizsga == 1)
                        <p class="text-sm text-gray-600"><strong>Elsősegélyvizsga:</strong> Megszerezve</p>
                        @else
                        <p class="text-sm text-gray-600"><strong>Elsősegélyvizsga:</strong> Még nincs megszerezve</p>
                        @endif
                        @if ($felhasznalo->szemuveg == 1)
                        <p class="text-sm text-gray-600"><strong>Szemüveg:</strong> Szemüveges</p>
                        @else
                        <p class="text-sm text-gray-600"><strong>Szemüveg:</strong> Nem Szemüveges</p>
                        @endif
                        
                    </div>
                </div>

                <!-- Aktivitások vagy egyéb információk -->
                <div class="mt-6 p-4 bg-white shadow-sm rounded-lg">
                    <h3 class="text-xl font-medium text-gray-700">Ide jönnek majd a vizsgák és órák holnap:</h3>
                    <p class="text-gray-600 mt-2">
                        <table>
                            <thead>
                                <tr>
                                    <th>Órák</th>
                                    <th>Vizsgák</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Oktató</th>
                                                <th>Időtartam</th>
                                                <th>Dátum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($orak as $ora)
                                            <tr>
                                                <td>{{ $ora->oktato }}</td> 
                                                <td>{{ $ora->idotartam_perc }} perc</td>
                                                <td>{{ \Carbon\Carbon::parse($ora->datum)->format('Y-m-d') }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center">Még nincs egyetlen óra sem.</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                    </td>
                                        
                                    <td>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Dátum</th>
                                                <th>Sikeresség</th>
                                                <th>Vizsgázó</th>
                                                <th>Oktató</th>
                                                <th>Vizsgáztató</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($vizsgak as $vizsga)
                                                <tr>
                                                    <td>{{ \Carbon\Carbon::parse($vizsga->datum)->format('Y-m-d') }}</td>
                                                    <td>{{ $vizsga->sikeresseg ? 'Sikeres' : 'Sikertelen' }}</td>
                                                    <td>{{ $vizsga->vizsgazo->name ?? 'N/A' }}</td>
                                                    <td>{{ $vizsga->oktato->name ?? 'N/A' }}</td>
                                                    <td>{{ $vizsga->vizsgaztato->name ?? 'N/A' }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">Nincs elérhető vizsga.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
