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
<a class="showAll_link pull-right" href="{{ route('index') }}">Show All</a>
<div class="flex-center position-ref full-height">
    @if (count($errors) > 0)
        <!-- Form Error List -->
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong!.<br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="" action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="Enter Title">
        </br></br>
        <label for="image">Image:</label>
        <input type="file" name="image">
        </br></br>
        <input type="submit" name="submit" value="Upload Image">
    </form>
    </br></br></br>
</div>
</body>
</html>
