<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davao Sticker Custom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Archivo', sans-serif;
        }
    </style>
    @livewireStyles
</head>
<body class="font-archivo text-gray-800 bg-pink-50">
    @include('layouts.nav')
    
    {{ $slot }}
    
    @livewireScripts
</body>
</html>