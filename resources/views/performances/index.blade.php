<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Summa Move - Performances</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
</head>
<body class="flex flex-col min-h-screen">
<header>
    @include('layouts.header')
</header>

<main class="Background flex-grow flex items-center justify-center p-6">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-6xl">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-semibold text-black">Performance overzicht</h2>
        </div>

        @include('layouts.messages')

        <div class="overflow-x-auto">
            <table class="min-w-full text-black shadow rounded-lg overflow-hidden">
                <thead>
                <tr class="bg-gray-100">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Oefening</th>
                    <th class="py-3 px-6 text-left">Gebruiker</th>
                    <th class="py-3 px-6 text-left">Duur</th>
                    <th class="py-3 px-6 text-left">Snelheid</th>
                    <th class="py-3 px-6 text-left">Afstand</th>
                    <th class="py-3 px-6 text-left">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($performances as $performance)
                    <tr class="border-b">
                        <td class="py-3 px-6">{{ $performance->id }}</td>
                        <td class="py-3 px-6">{{ $performance->exercise->name ?? 'n.v.t.' }}</td>
                        <td class="py-3 px-6">{{ $performance->user->name ?? 'n.v.t.' }}</td>
                        <td class="py-3 px-6">{{ $performance->duration }} min</td>
                        <td class="py-3 px-6">
                            {{ $performance->speed !== null ? $performance->speed . ' km/u' : 'n.v.t.' }}
                        </td>
                        <td class="py-3 px-6">
                            {{ $performance->distance !== null ? $performance->distance . ' km' : 'n.v.t.' }}
                        </td>
                        <td class="py-3 px-6">
                            <a href="{{ route('performances.edit', $performance->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded transition">Bewerken</a>
                            <form action="{{ route('performances.destroy', $performance->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded transition" onclick="return confirm('Weet je zeker dat je deze performance wilt verwijderen?')">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

<footer>
    @include('layouts.footer')
</footer>
</body>
</html>
