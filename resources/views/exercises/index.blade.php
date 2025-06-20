@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Oefeningen</h1>
        <a href="{{ route('exercises.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Nieuwe oefening</a>

        <table class="w-full mt-6 border">
            <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 text-left">Naam</th>
                <th class="px-4 py-2 text-left">Acties</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($exercises as $exercise)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $exercise->name }}</td>
                    <td class="px-4 py-2 flex gap-2">
                        <a href="{{ route('exercises.edit', $exercise) }}" class="text-blue-500">Bewerken</a>
                        <form action="{{ route('exercises.destroy', $exercise) }}" method="POST">
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
