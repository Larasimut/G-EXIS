<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

<nav class="bg-white shadow-md">
    <div class="max-w-6xl mx-auto flex justify-between items-center px-6 py-4">
        <h1 class="font-bold text-xl text-blue-600">Ekstrakurikuler School</h1>
        <ul class="flex gap-6">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">Beranda</a></li>
            <li><a href="{{ route('ekskul') }}" class="hover:text-blue-600">Ekstrakulikuler</a></li>
            <li><a href="{{ route('kontak') }}" class="hover:text-blue-600">Kontak</a></li>
        </ul>
    </div>
</nav>

<div class="max-w-6xl mx-auto px-6 py-10">
    @yield('content')
</div>

</body>
</html>
