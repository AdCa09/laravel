<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">
    <nav class="fixed top-0 left-0 w-full bg-gray-600 p-4 bg-opacity-70 z-50" x-data="{ open: false }" x-cloak>
        <div class="flex justify-between items-center">

            <a href="#" class="text-white text-lg font-semibold">Gusto-In</a>
            <button @click="open = !open" , @click.outside="if (open) open = false"
                class="w-8 h-8 flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 ml-auto lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                </svg>
            </button>


            <div class="hidden lg:flex lg:space-x-8 lg:items-center">
                <a href=""
                    class="text-white text-sm font-semibold py-2 px-4 hover:bg-gray-700 rounded-lg">Réservations</a>
                <a href="" class="text-white text-sm font-semibold py-2 px-4 hover:bg-gray-700 rounded-lg">Contacts</a>
            </div>
        </div>


        <ul x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="lg:hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
            tabindex="-1">
            <li>
                <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Réservations</a>
            </li>
            <li>
                <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contacts</a>
            </li>
        </ul>
    </nav>


    <header class="bg-cover bg-center h-screen text-center text-white"
        style="background-image: url('https://cdn.pixabay.com/photo/2020/02/19/05/10/doodle-4861309_1280.jpg');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-60">
            <div>
                @if (session('status'))
                    <div class="mt-10 rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">{{ session('status') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <h1 class="text-5xl font-bold mb-4">Bienvenue chez Gusto-In</h1>
                <p class="text-xl mb-6">Des plats délicieux prêts à venir déguster</p>
                <a href="{{ route('listRestaurants') }}"
                    class="bg-yellow-500 text-black px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-400">Découvrez
                    les restaurants</a>
            </div>
        </div>
    </header>


    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Gusto-In. Tous droits réservés.</p>
            <div class="mt-4">
                <a href="#" class="text-gray-400 hover:text-white mx-2">Politique de confidentialité</a>
                <a href="#" class="text-gray-400 hover:text-white mx-2">Conditions d'utilisation</a>
            </div>
        </div>
    </footer>

</body>

</html>