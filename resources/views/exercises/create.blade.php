<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Summa Move - Nieuwe Oefening</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
</head>
<body class="flex flex-col min-h-screen">
<header>
    @include('layouts.header')
</header>

<main class="Background flex-grow flex items-center justify-center p-6">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
        <h2 class="text-3xl font-semibold text-black mb-6">Nieuwe oefening aanmaken</h2>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('exercises.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-black font-semibold mb-1">Naam</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                       class="w-full border border-gray-300 rounded-lg p-2" required autofocus>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('exercises.index') }}" class="text-gray-600 hover:underline">Annuleren</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Opslaan</button>
            </div>
        </form>
    </div>
</main>

<footer>@include('layouts.footer')</footer>
</body>
</html>
