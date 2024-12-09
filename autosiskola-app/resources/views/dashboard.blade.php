@extends('layouts.app')

@section('content')
<div class="py-12" style="background-image: url('images/hatter.jpg'); background-position: center; background-attachment: fixed; background-size: cover; height: 100vh; width: 100%;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        @if ($felhasznalo->roleID == 3)
        <div class="mt-2 p-4 bg-white shadow-sm rounded-lg">
            <h3 class="text-2xl font-bold text-gray-800">Adminisztrátori Funkciók:</h3>
            <br>

            <div class="flex space-x-4">
                <a href="{{ route('users.index') }}" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-1/3 text-center">
                    Felhasználók kezelése
                </a>
                <a href="{{ route('orak.index') }}" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-1/3 text-center">
                    Óra időpontok kezelése
                </a>
                <a href="{{ route('vizsga.index') }}" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-1/3 text-center">
                    Vizsga időpontok kezelése
                </a>
            </div>
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

                <div class="mt-6 p-4 bg-white shadow-sm rounded-lg">
                    <h3 class="text-xl font-medium text-gray-700 m-2">Órák listája:</h3>
                    <table class="min-w-full bg-green-100 text-gray-800">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b bg-green-200 text-center">Oktató</th>
                                <th class="py-2 px-4 border-b bg-green-200 text-center">Időtartam</th>
                                <th class="py-2 px-4 border-b bg-green-200 text-center">Dátum</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($felhasznalo->roleID == 2)
                            @forelse ($orak->where('diak', auth()->id()) as $ora)
                                <tr class="bg-green-50">
                                    <td class="py-2 px-4 border-b text-center">{{ $ora->oktato }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $ora->idotartam_perc }} perc</td>
                                    <td class="py-2 px-4 border-b text-center">{{ \Carbon\Carbon::parse($ora->datum)->format('Y-m-d') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-2 px-4 border-b">Még nincs egyetlen óra sem.</td>
                                </tr>
                            @endforelse
                        @else
                            @forelse ($orak as $ora)
                                <tr class="bg-green-50">
                                    <td class="py-2 px-4 border-b text-center">{{ $ora->oktato }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $ora->idotartam_perc }} perc</td>
                                    <td class="py-2 px-4 border-b text-center">{{ \Carbon\Carbon::parse($ora->datum)->format('Y-m-d') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-2 px-4 border-b">Még nincs egyetlen óra sem.</td>
                                </tr>
                            @endforelse
                        @endif

                        </tbody>
                    </table>
                </div>

                <div class="mt-6 p-4 bg-white shadow-sm rounded-lg">
                    <h3 class="text-xl font-medium text-gray-700 m-2">Vizsgák listája:</h3>
                    <table class="min-w-full bg-red-100 text-gray-800">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b bg-red-200 text-center">Dátum</th>
                                <th class="py-2 px-4 border-b bg-red-200 text-center">Sikeresség</th>
                                <th class="py-2 px-4 border-b bg-red-200 text-center">Vizsgázó</th>
                                <th class="py-2 px-4 border-b bg-red-200 text-center">Oktató</th>
                                <th class="py-2 px-4 border-b bg-red-200 text-center">Vizsgáztató</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($felhasznalo->roleID == 2)
                            @forelse ($vizsgak->where('vizsgazo', auth()->id()) as $vizsga)
                                <tr class="bg-red-50">
                                    <td class="py-2 px-4 border-b text-center">{{ \Carbon\Carbon::parse($vizsga->datum)->format('Y-m-d') }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $vizsga->sikeresseg ? 'Sikeres' : 'Sikertelen' }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $felhasznalo->nev ?? 'N/A' }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $vizsga->oktato ?? 'N/A' }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $vizsga->vizsgaztato ?? 'N/A' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-2 px-4 border-b">Nincs elérhető vizsga.</td>
                                </tr>
                            @endforelse
                        @else
                            @forelse ($vizsgak as $vizsga)
                                <tr class="bg-red-50">
                                    <td class="py-2 px-4 border-b text-center">{{ \Carbon\Carbon::parse($vizsga->datum)->format('Y-m-d') }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $vizsga->sikeresseg ? 'Sikeres' : 'Sikertelen' }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $felhasznalo->nev ?? 'N/A' }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $vizsga->oktato ?? 'N/A' }}</td>
                                    <td class="py-2 px-4 border-b text-center">{{ $vizsga->vizsgaztato ?? 'N/A' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-2 px-4 border-b">Nincs elérhető vizsga.</td>
                                </tr>
                            @endforelse
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
