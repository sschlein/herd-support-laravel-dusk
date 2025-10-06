<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Dusk Tests</title>
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
                    <a href="/about" class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium text-gray-900">
                        About
                    </a>
                    <a href="/contact" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 transition">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-6">About Us</h1>
            <div class="prose prose-lg text-gray-600">
                <p class="text-xl leading-relaxed mb-6">
                    This is a test application for Laravel Dusk browser testing.
                </p>
                <p class="leading-relaxed mb-6">
                    Laravel Dusk provides an expressive, easy-to-use browser automation and testing API. By default, Dusk does not require you to install JDK or Selenium on your local computer. Instead, Dusk uses a standalone ChromeDriver installation.
                </p>
                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-r-lg">
                    <p class="text-indigo-900 font-medium">
                        This demo application showcases browser testing capabilities with Laravel Herd integration.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-indigo-500">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Browser Testing</h3>
                <p class="text-gray-600">Automate user interactions and verify your application works correctly in real browsers.</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-purple-500">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Laravel Herd</h3>
                <p class="text-gray-600">Native Laravel development environment for macOS with blazing fast performance.</p>
            </div>
        </div>
    </main>

    <footer class="mt-auto py-6 text-center text-gray-500 text-sm">
        <p>Laravel Dusk Test Application &copy; 2025</p>
    </footer>
</body>
</html>
