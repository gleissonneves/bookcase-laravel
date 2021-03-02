<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookcase</title>
    
    {{-- style --}}
    <link href="{{ url('asset/css/app.css') }}" rel="stylesheet">
    {{-- end style --}}


    {{-- Libs --}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    {{-- end Libs --}}

    {{-- modify --}}
    <link href="{{ url('asset/css/slick-modify.css') }}" rel="stylesheet">
    {{-- end modify --}}    

    @livewireStyles
</head>

<body class="bg-gray-100 px-16 py-4">
    @yield('template-content-main')

    @livewireScripts

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script> 
    <script type="text/javascript" src="{{url('asset/js/scrolling-card.js')}}" defer></script> 
</body>

</html>
