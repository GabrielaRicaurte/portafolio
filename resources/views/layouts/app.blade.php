<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portafolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/16a06030b6.js" crossorigin="anonymous"></script>

</head>

<body class="bg-black text-white">


    <div class="flex justify-center">
        <div class="hidden md:block w-3/12 h-auto"></div>
        <div class="w-6/12">
            @include('layouts.nav')
            @yield('content')
        </div>
        <div class="hidden md:block w-3/12 h-auto"></div>
    </div>


    {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
</body>

</html>
