<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
        <header class="flex flex-col md:flex-row md:justify-between md:items-center">
            <a href="{{ route('home') }}">Home</a>
            <form action="" class="search-bar">
                <input id="search" name="search" placeholder="Rechercher un article" type="search">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
            <nav x-data="{ open: false }" @click.outside="if (open) open = false" class="relative mt-4 md:mt-0">
                <button
                    @click="open = !open"
                    class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>
                </button>
                <ul
                    x-show="open"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5"
                    tabindex="-1"
                >
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Connexion</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-secondary flex items-center">
                            Inscription
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ml-1">
                                <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Réservations</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contacts</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main class="mt-10">
            <div class="space-y-10">
                @foreach ($restaurants as $restaurant)
                <article class="flex flex-col lg:flex-row lg:items-center pb-10 border-b border-slate-300">
                    <div class="lg:w-4/12"> 
                        <img class="w-full h-64 object-cover rounded-lg shadow-md" src="{{ $restaurant->thumbnail }}" alt="{{ $restaurant->name }}">
                    </div>
                    <div class="lg:w-8/12 lg:pl-6 mt-4 lg:mt-0"> 
                        <h2 class="text-xl font-semibold text-slate-900">{{ $restaurant->name }}</h2> 
                        <a href="" class="underline font bold texte-slate-700 text-lg">Note:{{ $restaurant->review }}</a>
                        <ul class="flex flex-wrap gap-2">
                            <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 1</a></li>
                        </ul>
                        <p class="mt-2 text-gray-600">{{ $restaurant->description }}</p>
                        <a href="{{ route('showRestaurant', ['restaurant' => $restaurant]) }}" class="btn btn-primary mt-4 flex items-center">
                            Réserver 
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </main>
    </div>
</body>
</html>
