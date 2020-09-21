<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="blah blah">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body>

        <div class="flex flex-col min-h-screen" id="app">
            <header class="flex items-center justify-between bg-gray-900 shadow-lg">
                <div class="flex justify-between w-full px-4 py-2 sm:w-48">
                    <div class="text-lg font-bold text-white">
                        <span class="brand">Laravel</span>
                    </div>
                    <div class="block sm:hidden">
                        <button type="button" class="text-gray-500 hover:text-white focus:outline-none focus:text-white">
                            <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <nav class="hidden w-full px-4 py-2 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <input class="block px-4 py-2 text-gray-200 bg-gray-800 border border-transparent rounded-lg focus:outline-none focus:bg-gray-700 focus:border-gray-700" placeholder="Search...">
                    </div>
                    <div>
                        <a href="#" class="px-3 py-2 font-semibold text-gray-500 rounded hover:bg-gray-800">Home</a>
                        <a href="#" class="px-3 py-2 font-semibold text-gray-500 rounded hover:bg-gray-800">Login</a>
                        <a href="#" class="px-3 py-2 font-semibold text-gray-500 rounded hover:bg-gray-800">Register</a>
                    </div>
                </nav>
            </header>
    
            <div class="flex-1 h-full bg-gray-400">
                @yield('content')
            </div>

            <footer class="px-4 py-5 text-gray-800 bg-gray-300">
                <div class="text-sm text-center">
                    Here is my footer.
                </div>
            </footer>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>