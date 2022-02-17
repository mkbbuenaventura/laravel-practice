<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        </style>
    </head>
    <body>
        <div class="row">
            <h1>{{ Session::get('message') }}</h1>
            <form method="post" action="/register">
                @csrf()
                <input type="text" name="name">
                <input type="text" name="email">
                <input type="password" name="password">
                <button type="submit">REGISTER</button>
            </form>
            <form action="/login" method="post">
                @csrf()
                <input type="text" name="email">
                <input type="password" name="password">
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </body>
</html>
