<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summa Move</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="p-4 flex justify-between items-center shadow-md">
    <div class="flex items-center space-x-3">
        <img src="{{ asset('images/summa_move_logo.png') }}" alt="Logo" class="h-20 w-auto">
        <h1 class="text-black text-2xl font-bold">Summa Move</h1>
    </div>
    <nav>
        <ul class="flex space-x-4">
            <li>
                <a href="{{ route('users.index') }}"
                   class="text-black font-semibold px-3 py-1 rounded-md hover:bg-gray-200 transition duration-200 cursor-pointer">
                    Users
                </a>
            </li>
            <li>
                <a href="{{ route('exercises.index') }}"
                   class="text-black font-semibold px-3 py-1 rounded-md hover:bg-gray-200 transition duration-200 cursor-pointer">
                    Exercises
                </a>
            </li>
            <li>
                <a href="{{ route('performances.index') }}"
                   class="text-black font-semibold px-3 py-1 rounded-md hover:bg-gray-200 transition duration-200 cursor-pointer">
                    Performances
                </a>
            </li>
        </ul>
    </nav>
</header>
