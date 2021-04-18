<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <style>
        .active {
            color: rgb(172, 10, 118);
            font-weight: bold;
        }

    </style>
</head>

<body>
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')

</body>

</html>
