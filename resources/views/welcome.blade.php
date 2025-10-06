<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Dusk Tests</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 min-h-screen">
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex space-x-8">
                    <a href="/" class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium text-gray-900">
                        Home
                    </a>
                    <a href="/about" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 transition">
                        About
                    </a>
                    <a href="/contact" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 transition">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">
                <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Laravel</span>
            </h1>
            <p class="text-xl text-gray-600">Welcome to the Dusk test application!</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Fast Testing</h3>
                <p class="text-gray-600">Browser testing with Laravel Dusk is quick and reliable.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Easy Setup</h3>
                <p class="text-gray-600">Get started with browser testing in minutes.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Developer Friendly</h3>
                <p class="text-gray-600">Built with developers in mind for maximum productivity.</p>
            </div>
        </div>
    </main>

    <footer class="mt-auto py-6 text-center text-gray-500 text-sm">
        <p>Laravel Dusk Test Application &copy; 2025</p>
    </footer>
</body>
</html>
