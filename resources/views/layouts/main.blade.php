<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') - Kafein Teras</title>

    {{-- FONT --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- ICON --}}
    <link rel="stylesheet" href="{{ asset('fonts/remixicon.css') }}">

    {{-- STYLES --}}
    <link rel="stylesheet" href="{{ asset('styles/main.css?V7++') }}">
    <link rel="stylesheet" href="{{ asset('styles/layout.css?V6++') }}">

</head>

<body>

    @include('components.nav_top')

    <section>
        @yield('content')
    </section>

    @include('components.nav_bottom')

</body>

</html>
