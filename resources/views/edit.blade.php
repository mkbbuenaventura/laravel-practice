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
            <form action="/update/{{ $user->id }}" method="post">
                @csrf()
                <input type="hidden" name="_method" value="PUT">
                <input type="text" name="name" value="{{ $user->name }}">
                <input type="text" name="email" value="{{ $user->email }}">
                <button type="submit">Update</button>
            </form>
        </div>
    </body>
</html>