<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant CRUD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-green-50 to-green-200 min-h-screen">
    <nav class="bg-green-700 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('plants.index') }}" class="font-bold text-2xl tracking-tight hover:text-green-100 transition">🌱 Plant CRUD</a>
            <a href="{{ route('plants.create') }}" class="px-6 py-2 rounded bg-green-600 text-white font-bold shadow hover:bg-green-700 border border-green-600 transition">Add Plant</a>
        </div>
    </nav>
    <main class="container mx-auto py-8 px-4">
        @yield('content')
    </main>
</body>
</html>
