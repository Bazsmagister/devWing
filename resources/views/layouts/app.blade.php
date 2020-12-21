<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>News</title>

    {{-- TailwindCSS without install--}}
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    {{-- Bootstrap --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

    {{-- <link rel="stylesheet" href="app.css"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- jquery --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    {{-- {{ alpine }} --}}
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script> --}}

    <script src="{{ asset('js/app.js') }}"></script>

    {{-- @livewireStyles --}}
    {{-- <livewire:styles /> --}}
</head>

<body class="bg-red-200">


    <div class="mx-16 mb-20">
        @yield('content')
    </div>

    <footer class="bg-gray-600 fixed bottom-0 w-full">

        Hi, this is the footer

    </footer>

    {{-- @livewireScripts --}}
    {{-- <livewire:scripts /> --}}
</body>

</html>
