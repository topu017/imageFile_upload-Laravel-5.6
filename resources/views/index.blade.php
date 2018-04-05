<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    </head>
    <body>
    <a class="create_link pull-right" href="{{ route('create') }}">Create New</a>
        <div class="flex-center position-ref full-height">
            <table>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                </tr>
                @foreach($images as $image)
                <tr>
                    <td>{{ $image->title }}</td>
                    <td>
                        <img src="{{ Storage::url($image->image) }}" alt="" width="200px">
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
