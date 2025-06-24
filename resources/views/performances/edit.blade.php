<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Summa Move - Performance Bewerken</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
</head>
<body class="flex flex-col min-h-screen">
<header>
    @include('layouts.header')
</header>

<main class="Background flex-grow flex items-center justify-center p-6">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-2xl">
        <h2 class="text-3xl font-semibold text-black mb-6">Performance bewerken</h2>

        <form action="{{ route('performances.update', $performance->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="exercise_id" class="block text-black font-semibold mb-1">Oefening</label>
                <select name="exercise_id" id="exercise_id" class="w-full border border-gray-300 rounded-lg p-2">
                    @foreach ($exercises as $exercise)
                        <option value="{{ $exercise->id }}" {{ $performance->exercise_id == $exercise->id ? 'selected' : '' }}>
                            {{ $exercise->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="user_id" class="block text-black font-semibold mb-1">Gebruiker</label>
                <select name="user_id" id="user_id" class="w-full border border-gray-300 rounded-lg p-2">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $performance->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="duration" class="block text-black font-semibold mb-1">Duur (minuten)</label>
                <input type="number" name="duration" id="duration"
                       value="{{ old('duration', $performance->duration) }}"
                       class="w-full border border-gray-300 rounded-lg p-2" step="0.1" required>
            </div>

            <div>
                <label for="speed" class="block text-black font-semibold mb-1">Snelheid (km/u)</label>
                <input type="number" name="speed" id="speed"
                       value="{{ old('speed', $performance->speed) }}"
                       class="w-full border border-gray-300 rounded-lg p-2" step="0.1">
            </div>

            <div>
                <label for="distance" class="block text-black font-semibold mb-1">Afstand (km)</label>
                <input type="number" name="distance" id="distance"
                       value="{{ old('distance', $performance->distance) }}"
                       class="w-full border border-gray-300 rounded-lg p-2" step="0.1">
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('performances.index') }}" class="text-gray-600 hover:underline">Annuleren</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Opslaan</button>
            </div>
        </form>
    </div>
</main>

<footer>
    @include('layouts.footer')
</footer>
</body>
</html>
