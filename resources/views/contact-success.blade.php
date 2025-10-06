<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success - Dusk Tests</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 min-h-screen">
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex space-x-8">
                    <a href="/" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 transition">
                        Home
                    </a>
                    <a href="/about" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 transition">
                        About
                    </a>
                    <a href="/contact" class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium text-gray-900">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 text-center">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>

            <h1 class="text-4xl font-bold text-gray-900 mb-4">Thank You!</h1>
            <p id="success-message" class="text-xl text-gray-600 mb-8">
                Thank you, <span class="font-semibold text-indigo-600">{{ $name }}</span>! Your message has been received.
            </p>

            <div class="bg-indigo-50 border border-indigo-100 rounded-lg p-6 mb-8">
                <p class="text-gray-700">
                    We'll get back to you as soon as possible. Usually within 24 hours.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="/"
                    class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-lg hover:from-indigo-700 hover:to-purple-700 transition shadow-md hover:shadow-lg"
                >
                    Back to Home
                </a>
                <a
                    href="/contact"
                    class="inline-flex items-center justify-center px-6 py-3 bg-white text-gray-700 font-semibold rounded-lg border border-gray-300 hover:bg-gray-50 transition"
                >
                    Send Another Message
                </a>
            </div>
        </div>
    </main>

    <footer class="mt-auto py-6 text-center text-gray-500 text-sm">
        <p>Laravel Dusk Test Application &copy; 2025</p>
    </footer>
</body>
</html>
