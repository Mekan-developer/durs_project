<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    {{-- @vite('resources/css/app.css') --}}
    {{-- @vite('resources/js/modal.js')
    @vite('resources/js/script.js') --}}
    <title>Document</title>
</head>
<body>
    @yield('content')
    <div class="relative">
        @yield('header_bedre')

        @yield('header_kafel')

        @yield('ayratynlykda_bedreler')


    </div>

    @yield('modal_contact')
    <script src="js/modal.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
