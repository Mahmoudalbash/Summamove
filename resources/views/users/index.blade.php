<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Summa Move - Users</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/users.css') }}" />
</head>
<body class="flex flex-col min-h-screen">
<header>
    @include('layouts.header')
</header>
<main class=" Background flex-grow flex items-center justify-center p-6">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-4xl">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-semibold text-black">Gebruikersoverzicht</h2>
            <a href="#" class="text-black px-4 py-2 rounded">
                Nieuwe gebruiker
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-black shadow rounded-lg overflow-hidden">
                <thead class="text-black">
                <tr>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Gebruikersnaam</th>
                    <th class="py-3 px-6 text-left">Acties</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b">
                    <td class="py-3 px-6">1</td>
                    <td class="py-3 px-6">voorbeeld_user</td>
                    <td class="py-3 px-6">
                        <a href="#" class="text-black px-3 py-1 rounded mr-2">
                            Bewerken
                        </a>
                        <a href="#" class="text-black px-3 py-1 rounded">
                            Verwijderen
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

{{-- Footer blijft eigen kleur --}}
@include('layouts.footer')

</body>
</html>
