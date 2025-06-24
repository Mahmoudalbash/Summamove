<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Summa Move - Oefeningen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
</head>
<body class="flex flex-col min-h-screen">
<header>
    @include('layouts.header')
</header>

<main class="Background flex-grow flex items-center justify-center p-6">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-4xl">
        @if (session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-semibold text-black">Oefeningen overzicht</h2>
            <a href="{{ route('exercises.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded transition">Nieuwe oefening</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-black shadow rounded-lg overflow-hidden">
                <thead>
                <tr>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Naam</th>
                    <th class="py-3 px-6 text-left">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($exercises as $exercise)
                    <tr class="border-b">
                        <td class="py-3 px-6">{{ $exercise->id }}</td>
                        <td class="py-3 px-6">{{ $exercise->name }}</td>
                        <td class="py-3 px-6">
                            <a href="{{ route('exercises.edit', $exercise->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded transition">Bewerken</a>
                            <form action="{{ route('exercises.destroy', $exercise->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Weet je zeker dat je deze oefening wilt verwijderen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded transition">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

<footer>@include('layouts.footer')</footer>
</body>
</html>
