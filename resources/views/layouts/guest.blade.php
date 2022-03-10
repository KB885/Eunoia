<!DOCTYPE html>
<html class="bg-gray-50 text-gray-800 antialiased" lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Stylings -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-full">
    <main class="">
        {{ $slot }}
    </main>
    <footer>
        @include('layouts.components.footer')
    </footer>
</body>
</html>
