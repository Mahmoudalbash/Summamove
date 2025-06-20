@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Prestaties</h1>
        <a href="{{ route('performances.create') }}" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">+ Nieuwe prestatie</a>

        <table class="w-full mt-6 border">
            <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">Gebruiker</th>
                <th class="px-4 py-2">Oefening</th>
                <th class="px-4 py-2">Duur (min)</th>
                <th class="px-4 py-2">Snelheid</th>
                <th class="px-4 py-2">Afstand (km)</th>
                <th class="px-4 py-2">Acties</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($performances as $performance)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $performance->user->username }}</td>
                    <td class="px-4 py-2">{{ $performance->exercise->name }}</td>
                    <td class="px-4 py-2">{{ $performance->duration }}</td>
                    <td class="px-4 py-2">{{ $performance->speed ?? '-' }}</td>
                    <td class="px-4 py-2">{{ $performance->distance ?? '-' }}</td>
                    <td class="px-4 py-2 flex gap-2">
                        <a href="{{ route('performances.edit', $performance) }}" class="text-blue-500">Bewerken</a>
                        <form action="{{ route('performances.destroy', $performance) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500" onclick="return confirm('Weet je het zeker?')">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
