<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    {{-- @vite('public/css/style.css') --}}
    <title>DURS admin</title>
</head>
<body style="font-serif">
        <div class="w-auto relative z-20 opacity-80" style="height:100vh; background-color:#1F3E37;"></div>
        <img class="absolute z-50 top-2 left-20 w-[123px] h-[40px] " src="icons/Durs_logo.png" alt="">
        <div  style="height:100vh;" class="flex flex-col justify-between absolute top-0 w-full">
            <div  class="flex justify-between w-full">
                <img style="transform-scale-x:-1;" class="w-24 -scale-x-100 rotate-180 h-auto" src="icons/Flyer_bottom_l.png" alt="flyer">
                <img class="w-24 rotate-180 h-auto" src="icons/Flyer_bottom_l.png" alt="flyer">
            </div>
            <div class="flex justify-between">
                <img class="w-24 h-auto" src="icons/Flyer_bottom_l.png" alt="flyer">
                <img style="--transform-scale-y: -1;  " class="w-24 -scale-x-100 rotate-135 h-auto" src="icons/Flyer_bottom_l.png" alt="flyer">
            </div>
        </div>

        <div style="height:90%;" class="absolute z-50 bottom-0 left-0 w-1/6">
            <ul class="items-center overflow-auto">
                <a href="index?get=messages" class="links border-t-2"><li >Gelen hatlar</li></a>
                <a href="index?get=add_product" class="links " ><li>Haryt goşmak</li></a>
                <a href=" " class="links"><li>Harytlar</li></a>
            </ul>
        </div>

        <div style="height:90%;" class="flex justify-center overflow-y-scroll absolute z-50 bottom-0 text-center right-0 w-5/6 bg-white bg-opacity-70 overflow-auto">
            @if($_REQUEST['get'] == 'add_product')
                @include('includes.add_product')
            @elseif ($_REQUEST['get'] == 'messages')
                @include('includes.messages')
            @endif
        </div>
</body>
</html>
