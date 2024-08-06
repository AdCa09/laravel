
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') . ' | ' . $restaurant->title }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased pt-10 pb-16 md:pb-32">
    {{-- Conteneur global --}}
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <header class="flex justify-between items-center space-x-5 text-slate-900">
            {{-- Logo --}}
            <a href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>
            </a>
            {{-- Navigation --}}
            <nav x-data="{ open: false }" x-cloak class="relative">
                <button
                    @click="open = !open"
                    @click.outside="if (open) open = false"
                    class="w-8 h-8 flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
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
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    tabindex="-1"
                >
                    <li>
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Connexion</a>
                    </li>
                    <li>
                        <a href="" class="flex items-center px-4 py-2 font-semibold text-sm text-indigo-700 hover:bg-gray-100">
                            Inscription
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ml-1">
                                <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Réservations</a>
                    </li>
                    <li>
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contacts</a>
                    </li>
                </li>
                </ul>
                
            </nav>
        </header>

        <main class="mt-10 md:mt-12 lg:mt-16">
            <div class="space-y-10 md:space-y-16">
                {{-- Début --}}

                <article class="flex flex-col lg:flex-row pb-10 md:pb-16 border-b">
                    <div class="lg:w-5/12">
                        <img class="w-full max-h-72 object-cover lg:max-h-none lg:h-full" src="{{ $restaurant->thumbnail }}">
                    </div>
                    <div class="flex flex-col items-start mt-5 space-y-5 lg:w-7/12 lg:mt-0 lg:ml-12">
                        <a href="" class="underline font-bold text-slate-900 text-lg">Catégorie</a>
                        <h1 class="font-bold text-slate-900 text-3xl lg:text-5xl leading-tight">{{ $restaurant->name }}</h1>
                        <a href="" class="underline font bold texte-slate-700 text-lg">Note:{{ $restaurant->review }}</a>
                        <p class="text-xl lg:text-2xl text-slate-600">Min. €{{ $restaurant->price }}</p>
                        <ul class="flex flex-wrap gap-2">
                            <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 1</a></li>
                        </ul>
                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($restaurant->address) }}" class=" underline text-xl lg:text-2xl text-slate-600" target="_blank">
                            {{--logo ici --}}
                            {{ $restaurant->address }}
                        </a>
                        <a href="{{ route('checkoutRestaurant') }}" class="btn btn-primary mt-4 flex items-center">
                            Valider ma réservation
                        </a>
                        
                        
                    </div>
                </article>
                <div class="max-w-4xl mx-auto p-6">
                    <!-- Section header -->
                    <div class="bg-white shadow rounded-lg p-6 mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 flex items-center">
                            <span class="mr-2">À propos du restaurant</span>
                        </h2>
                    </div>

                    <div class="bg-white shadow rounded-lg p-6">
                       <p>{{ $restaurant->description }}</p>
                    </div>
                </div>
                <div class="bg-white max-w-4xl mx-auto rounded-lg shadow-lg flex">
                    <h3 class="text-2xl font-semibold text-gray-800">Les avis :</h3>
                    
                    <div class="p-6 flex-1">
                        <h2 class="text-2xl font-bold mb-2">ici ira le nom de la personne qui a laisser un avis</h2>
                        <p class="text-gray-700 mb-4">Voici un petit texte descriptif pour donner plus d'informations sur le contenu de la carte.</p>
                    </div>
                    
                    <div class="relative w-48 flex-shrink-0">
                        <img class="w-full h-full object-cover rounded-r-lg" src="https://via.placeholder.com/500x300" alt="Image de la carte">
                    </div>
                </div>
                {{-- Fin du --}}
            </div>
        </main>
    </div>
</body>
</html>