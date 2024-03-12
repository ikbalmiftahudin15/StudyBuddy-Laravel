<!D
OCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudyBuddy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* Tailwind CSS */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');

    </style>

</head>
<body class="antialiased">

    {{-- Navbar --}}
       <nav class="bg-blue-500 shadow-lg fixed top-0 w-full z-10" style="height: 60px;">
            <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                <div class="flex items-center">
                    <a class="text-xl font-bold text-white dark:text-white hover:text-white dark:hover:text-gray-300 transition duration-300" href="#">StudyBuddy</a>
                </div>

                <div class="hidden sm:block">
                    <div class="flex items-center">
                        @auth
                            <a href="{{ url('/home') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 transition duration-300">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 transition duration-300">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 transition duration-300">Register</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </nav>


        {{-- Content --}}
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white sm:text-5xl md:text-6xl lg:text-7xl">
                Welcome to <span class="text-blue-500">StudyBuddy</span>
            </h1>
            <p class="mt-6 text-xl text-gray-700 dark:text-gray-300 text-center">
                Empowering Education for Everyone
            </p>
            <div class="mt-8 flex justify-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-yellow-600 dark:bg-gray-800 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Explore Courses
                    <!-- Heroicon name: solid/chevron-right -->
                    <svg class="-mr-1 ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M6.293 5.293a1 1 0 0 1 1.414 0l4 4a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414-1.414L9.586 11H3a1 1 0 0 1 0-2h6.586l-2.293-2.293a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

        <!-- Banner -->
    <div class="bg-gray-200 dark:bg-gray-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Kota -->
                <div class="flex flex-col items-center justify-center bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Kota</h2>
                    <p class="text-3xl font-bold text-blue-500 mt-2">10</p>
                </div>
                <!-- Murid Terdaftar -->
                <div class="flex flex-col items-center justify-center bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Murid Terdaftar</h2>
                    <p class="text-3xl font-bold text-blue-500 mt-2">500</p>
                </div>
                <!-- Guru Terdaftar -->
                <div class="flex flex-col items-center justify-center bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Guru Terdaftar</h2>
                    <p class="text-3xl font-bold text-blue-500 mt-2">50</p>
                </div>
            </div>
        </div>
    </div>


</body>
</html>

