<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.7/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-custom {
            background: linear-gradient(to right, #6EE7B7, #3B82F6);
        }
    </style>
</head>

<body class="bg-custom flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Connexion</h2>
        <form>
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-medium mb-2">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" placeholder="Votre nom d'utilisateur"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                    Se connecter
                </button>
            </div>
        </form>
    </div>
</body>

</html>