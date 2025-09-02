<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login - Kafein Teras</title>

    {{-- FONT --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- ICON --}}
    <link rel="stylesheet" href="{{ asset('fonts/remixicon.css') }}">

    {{-- STYLES --}}
    {{-- <link rel="stylesheet" href="{{ asset('styles/main.css?V7++') }}">
    <link rel="stylesheet" href="{{ asset('styles/layout.css?V6++') }}"> --}}

    <link rel="stylesheet" href="{{ asset('styles/login.css?v3++') }}">

</head>

<body>

    <div class="login-box">

        <div class="box">

            <div class="header">
                <h3>Kafein Teras</h3>
                <p class="text-small gray">Enter your credentials to access your account</p>
            </div>

            <form action="" method="post">

                @csrf

                <input type="text" name="name" id="" placeholder="Username" autocomplete="off">

                <input type="password" name="password" id="" placeholder="Password" autocomplete="off">

                <input type="submit" name="submit" id="" value="Login">
            </form>

        </div>

    </div>

</body>

</html>
