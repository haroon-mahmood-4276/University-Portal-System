<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('PageTitle') - UNi Portal Management System</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="app">
        <div>
            {{-- {{ View::make('Others.MainHeader') }} --}}
        </div>


        <div>
            {{-- @yield('content') --}}
        </div>

        {{-- {{  View::make('Others.Footer') }} --}}
        <vueapp></vueapp>
    </div>


    <script src="https://kit.fontawesome.com/dfc786dc18.js" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/unijs.js') }}"></script> --}}
</body>

</html>
