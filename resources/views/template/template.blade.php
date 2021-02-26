<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookcase</title>

    <link href="{{ url("asset/css/app.css") }}" rel="stylesheet">

    @livewireStyles
</head>
<body class="bg-gray-100">
    @yield('template-content-main')

    @livewireScripts
</body>
</html>