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
            

            <table>
                <tr>
                  <th>NAME</th>
                  <th>Email</th>
                </tr>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td><a href="/edit/{{ $user->id }}">Edit</a></td>
                  <td><form method="post" action="/destroy/{{ $user->id }}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger btn-icon">
                        delete
                    </button>
                  </form></td>
                </tr>
            @endforeach()
            </table>
            <h1>HOMEPAGE</h1>
        </div>
    </body>
</html>
