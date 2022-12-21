@extends('loyaut')

@section('header_bedre')
    <div class="ramka" id="top">
        <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
        <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">
        <!-- header -->
        <header class="px-2 bg-white flex justify-between h-7 sm:h-8 md:h-10 lg:h-12">

            <a href="#">
                <img class="w-auto h-7 sm:h-8 md:h-10 lg:h-12 ml-10 sm:ml-24  md:ml-32 lg:ml-48" src="icons/Durs_logo.png" alt="Durs Logo">
            </a>
            <nav class="flex items-center mr-10 sm:mr-24 md:32 lg:mr-40">
                <!-- choosing language -->
                <ul class="inline-flex items-center">
                    <li class="px-2"><a href="{{ url('tm') }}"><img class="flag" src="icons/tkm-flag.png" alt=""></a></li>
                    <li class="px-2"><a href="{{ url('ru') }}"><img class="flag" src="icons/rus-flag.png" alt=""></a></li>
                    <li class="px-2"><a href="{{ url('en') }}"><img class="flag" src="icons/uk-flag.png" alt=""></a></li>
                </ul>
                <!-- humburger menu button -->
                <div class="ml-1 sm:ml-2 md:ml-3 lg:ml-4">
                    <button class="navbar-burger flex items-center text-blue-600 p-1 md:p-2 lg:p-3">
                        <!-- menu yazgy  we sekili -->
                        <div class="flex items-center ">
                            <div class="mx-0.5">
                                <div class="menu_icons"></div>
                                <div class="menu_icons"></div>
                                <div class="menu_icons"></div>
                            </div>
                            <div class="">
                                <div class="menu_icons"></div>
                                <div class="menu_icons"></div>
                                <div class="menu_icons"></div>
                            </div>
                            <span class="font-semibold text-green-600 ml-2 text-sm md:text-lg">MENU</span>
                        </div>
                        <!--  -->
                    </button>
                </div>
            </nav>
        </header>
        <!-- Menu container -->
        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav class="fixed top-0 right-0 bottom-0 flex flex-col w-1/5 py-4 px-4 bg-white border-r overflow-y-auto">
                <div class="flex items-center -mt-2 ml-4">
                    <a class="mr-auto text-3xl font-bold leading-none" href="">
                        <img class="flex justify-center items-center w-auto h-12" src="icons/Durs_logo.png" alt="Durs Logo">
                    </a>
                </div>
                <div>
                    <p class="font-bold text-base">LUX</p>
                    <ul >
                        <li class="mb-1">
                            <a class="a_link_menu" href="#id1"><img class="size_menu_color" src="icons/color.png" alt="">For exterior works</a>
                        </li>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#id2"><img class="size_menu_color" src="icons/color.png" alt="">For interior works</a>
                        </li>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#id3"><img class="size_menu_color" src="icons/color.png" alt="">For ceiling works</a>
                        </li>
                    </ul>
                    <p class="font-bold text-sm">ECONOM</p>
                    <ul>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#id4"><img class="size_menu_color" src="icons/color.png" alt="">For exterior works</a>
                        </li>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#id5"><img class="size_menu_color" src="icons/color.png" alt="">For interior works</a>
                        </li>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#id6"><img class="size_menu_color" src="icons/color.png" alt="">For ceiling works</a>
                        </li>
                    </ul>
                    <p class="font-bold text-sm">TMEX</p>
                    <ul>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#id7"><img class="size_menu_color" src="icons/color.png" alt="">For exterior works</a>
                        </li>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#id8"><img class="size_menu_color" src="icons/color.png" alt="">For interior works</a>
                        </li>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#id9"><img class="size_menu_color" src="icons/color.png" alt="">For interior works</a>
                        </li>
                    </ul>
                    <p class="font-bold text-sm">ASTAR</p>
                    <ul>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#"><img class="size_menu_color" src="icons/color.png" alt="">For exterior works</a>
                        </li>
                    </ul>
                    <p class="font-bold text-sm">DRY MIXES</p>
                    <ul class="">
                        <li class="mb-1">
                            <a class="a_link_menu" href="#mx1"><img class="size_menu_color" src="icons/color.png" alt="">BIRKIM Gold</a>
                        </li>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#mx2"><img class="size_menu_color" src="icons/color.png" alt="">BIRKIM</a>
                        </li>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#mx3"><img class="size_menu_color" src="icons/color.png" alt="">DÜRS</a>
                        </li>
                        <li class="mb-1">
                            <a class="a_link_menu" href="#mx4"><img class="size_menu_color" src="icons/color.png" alt="">DÜRS Ekonom</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <!-- bedreler -->
        <div class="flex flex-col w-full h-full justify-center">
                <!-- bedro 1-nji setir -->
            <div class="flex justify-around ">
                <!-- LUX bedreler -->
                <div class="w-3/6">
                    <div class="flex flex-col justify-center items-center mb-4 h-8">
                        <p class="uppercase text-[14px] md:text-[16px] lg:text-xl font-semibold text-black">"LUX"</p>
                        <img class="h-[2px] md:h-[3px] lg:h-[4px] w-[80px] md:w-[95px] lg:w-[110px]" src="icons/color.png" alt="color">

                    </div>

                    <div class="flex justify-around">
                        <span>
                            <img class="bedro_size" src="bedreler/durs-dasky-lyuks.png" alt="LUX">
                            <p class="usage">@lang('common.usage1')</p>
                        </span>
                        <span>
                            <img class="bedro_size" src="bedreler/durs-icki-lyuks.png" alt="LUX">
                            <p class="usage">@lang('common.usage2')</p>
                        </span>
                        <span>
                            <img class="bedro_size" src="bedreler/durs-potolok-lyuks.png" alt="LUX">
                            <p class="usage">@lang('common.usage3')</p>
                        </span>


                    </div>
                </div>
                <!-- TMEX bedreler -->
                <div class="w-2/6">
                    <div class="flex flex-col justify-center items-center mb-4 h-8">
                        <p class="uppercase text-[14px] md:text-[16px] lg:text-xl font-semibold text-black">"TMEX"</p>
                        <img class="h-[2px] md:h-[3px] lg:h-[4px] w-[80px] md:w-[95px] lg:w-[110px]" src="icons/color.png" alt="color">
                    </div>

                    <div class="flex flex-col justify-around">

                        <span class="flex justify-around">
                            <img class="bedro_size" src="bedreler/tmex-exterior.png" alt="LUX">
                            <img class="bedro_size" src="bedreler/durs-icki-lyuks.png" alt="LUX">
                        </span>
                        <span>
                            <p class="usage">@lang('common.usage1')</p>
                        </span>



                    </div>
                </div>
                <!-- ASTAR bedreler -->
                <div class="w-1/6">
                    <div class="flex flex-col justify-center items-center mb-4 h-8">
                        <p class="uppercase text-[14px] md:text-[16px] lg:text-xl font-semibold text-black">"ASTAR"</p>
                        <img class="h-[2px] md:h-[3px] lg:h-[4px] w-[80px] md:w-[95px] lg:w-[110px]" src="icons/color.png" alt="color">
                    </div>

                    <div class="flex justify-around">
                        <span>
                            <img class="bedro_size" src="bedreler/durs-dasky-lyuks.png" alt="LUX">
                            <p class="usage"></p>
                        </span>

                    </div>
                </div>
            </div>
            <!-- bedro 2-nji setir -->
            <div class="flex justify-around pb-4">
                <!-- ECONOM bedreler -->
                <div class="w-3/6">
                    <div class="flex flex-col justify-center items-center mb-4 h-8">
                        <p class="uppercase text-[14px] md:text-[16px] lg:text-xl font-semibold text-black">"econom"</p>
                        <img class="h-[2px] md:h-[3px] lg:h-[4px] w-[80px] md:w-[95px] lg:w-[110px]" src="icons/color.png" alt="color">
                    </div>

                    <div class="flex justify-around">
                        <span>
                            <img class="bedro_size" src="bedreler/durs dasky.png" alt="LUX">
                            <p class="usage">@lang('common.usage1')</p>
                        </span>

                        <span>
                            <img class="bedro_size" src="bedreler/dursa-icki.png" alt="LUX">
                            <p class="usage">@lang('common.usage2')</p>
                        </span>
                        <span>
                            <img class="bedro_size" src="bedreler/durs-potolok.png" alt="LUX">
                            <p class="usage">@lang('common.usage3')</p>
                        </span>
                    </div>
                </div>
                <!-- TMEX bedreler -->
                <div class="w-2/6">
                    <div class="mb-4 h-8"></div>

                    <div class="flex flex-col justify-around">
                        <span class="flex justify-around">
                            <img class="bedro_size" src="bedreler/tmex-interior.png" alt="LUX">
                            <img class="bedro_size" src="bedreler/durs-icki-lyuks.png" alt="LUX">
                        </span>
                        <span>
                            <p class="usage">@lang('common.usage2')</p>
                        </span>

                    </div>
                </div>
                <div class="w-1/6"></div>

            </div>

        </div>
    </div>
@endsection


@section('header_kafel')
    <div class="ramka items-center justify-center">
        <!-- flyer top and bottom -->
        <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
        <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">


                <!-- Kafel yelimi -->
            <div class="flex justify-center  sm:justify-around w-full sm:px-6 md:px-10 lg:px-12">
                <!-- Kafel yelimi-1 -->
                <div class="w-5/12 md:w-4/12 lg:w-3/12">
                    <div class="flex flex-col justify-center items-center mb-4 h-8">
                        <p class="text-[12px] sm:text-sm md:text-[16px] lg:text-[18px] font-semibold text-black">@lang('common.name_kafel')</p>
                        <img class="w-[80px] md:w-[100px] lg:w-[125px] h-[1px] md:h-[2px] lg:h-[3px]" src="icons/color.png" alt="color">
                    </div>

                    <div class="flex justify-around">
                        <span>
                            <img class="kafel_yelimi_size mb-4" src="kafel_yelimi/Birkim_Gold.jpg" alt="LUX">
                            <p class="text_kafel">BIRKIM Gold</p>
                        </span>
                        <span>
                            <img class="kafel_yelimi_size mb-4" src="kafel_yelimi/Birkim.jpg" alt="LUX">
                            <p class="text_kafel">BIRKIM</p>
                        </span>
                    </div>
                </div>
                <!-- Kafel yelimi-2-->
                <div class="w-5/12 md:w-4/12 lg:w-3/12">
                    <div class="flex flex-col justify-center items-center mb-4 h-8">
                        <p class="text-[12px] sm:text-sm md:text-[16px] lg:text-[18px] font-semibold text-black">@lang('common.name_kafel')</p>
                        <img class="w-[80px] md:w-[100px] lg:w-[125px] h-[1px] md:h-[2px] lg:h-[3px]" src="icons/color.png" alt="color">
                    </div>

                    <div class="flex justify-around">

                        <span>
                            <img class="kafel_yelimi_size mb-4" src="kafel_yelimi/Durs.png" alt="LUX">
                            <p class="text_kafel"> DÜRS</p>
                        </span>
                        <span>
                            <img class="kafel_yelimi_size mb-4" src="kafel_yelimi/Durs_Ekonom.png" alt="LUX">
                            <p class="text_kafel">DÜRS Ekonom</p>
                        </span>
                    </div>
                </div>
            </div>
    </div>
@endsection

@section('ayratynlykda_bedreler')
        <!--LUX Bedre 1-->
        <div class="w-full items-center justify-center"><? $k = 1; ?>
            @foreach ($products as $product)
                <?
                $id = 'id'.$k++;
                $color = $product->btn_color;

                    $text = explode('.',$product->$ulanys);
                    $first_text = $text[0].'.';

                    $count = count(explode('.',$product->$ulanys))-1;
                    $last_text=''; $i=1;
                    while ($count>=1) {
                        $last_text .=$text[$i].'.' ;
                        $i++;$count--;
                    }
                ?>
                <div id="{{$id}}" class="ramka items-center justify-center">
                    <!-- flyer top and bottom -->
                    <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
                    <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">

                        <div class="flex justify-around w-full p-0">
                            <div class="flex flex-col">
                                <div class="flex flex-col justify-center items-center mb-4 h-8">
                                    <p class="text-xl font-semibold text-black">"{{  $product->categories  }}"</p>
                                    <img class="w-56 h-[3px]" src="icons/color.png" alt="color">
                                </div>

                                <div class="flex justify-center items-center ">
                                    <div class="flex justify-center items-center mr-8 sm:mr-10 md:mr-18 lg:mr-28">
                                        <img class="bedro_singl" src="{{  $product->images  }}" alt="DURS">
                                    </div>
                                    <div class="flex flex-col justify-center items-center text_size">
                                        <h1 class="font-bold text-center sm:text-sm md:text-md lg:text-lg lg:leading-5 md:leading-4 sm:leading-3 mb-2 sm:mb-[2px] md:[3px]">{{ $product->$ady }}</h1>
                                        <div class="text_size">
                                        <b>@lang('common.text_1')</b>{{  $product->$sarpEdilis  }}<br><br>
                                        <b>@lang('common.text_2')</b>{{  $first_text  }}
                                        <br><br>{{$last_text}}
                                        </div>
                                        <button style="background-color:{{ $color }}"  class="btn_contact open">@lang('common.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
        <div>
        <!--Kafel yelimi 1-->
            <div id="mx1" class="ramka items-center justify-center">
                <!-- flyer top and bottom -->
                <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
                <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">
                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">@lang('yelim.title')</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>
                        <div class="flex justify-center items-center ">
                            <div class="mr-2 lg:mr-28">
                                <img class="bedro_singl" src="admin_bedreler/Birkim-Gold.jpg" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center text_size">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('yelim.name1')</h1>
                                <div class="text_size">
                                    @lang('yelim.text1')
                                </div>
                                <button  class="btn_contact open">@lang('tmex.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--Kafel yelimi 2-->
            <div id="mx2" class="ramka items-center justify-center">
                <!-- flyer top and bottom -->
                <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
                <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">
                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">@lang('yelim.title')</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>
                        <div class="flex justify-center items-center ">
                            <div class="mr-2 lg:mr-28">
                                <img class="bedro_singl" src="admin_bedreler/Birkim.jpg" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center text_size">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('yelim.name2')</h1>
                                <div class="text_size">
                                    @lang('yelim.text2')
                                </div>
                                <button  class="btn_contact open">@lang('tmex.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!--Kafel yelimi 3-->
            <div id="mx3" class="ramka items-center justify-center">
                <!-- flyer top and bottom -->
                <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
                <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">
                    <div class="flex justify-around w-full">
                        <div class="flex flex-col">
                            <div class="flex flex-col justify-center items-center mb-4 h-8">
                                <p class="text-xl font-semibold text-black">@lang('yelim.title')</p>
                                <img class="w-56 h-1" src="icons/color.png" alt="color">
                            </div>

                            <div class="flex justify-center items-center ">
                                <div class="mr-2 lg:mr-28">
                                    <img class="bedro_singl" src="admin_bedreler/Durs.png" alt="DURS">
                                </div>
                                <div class="flex flex-col justify-center items-center text_size">
                                    <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('yelim.name3')</h1>
                                    <div class="text_size">
                                        @lang('yelim.text3')
                                    </div>
                                    <button  class="btn_contact open">@lang('tmex.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                                </div>


                            </div>
                        </div>
                    </div>

            </div>
            <!--Kafel yelimi 4-->
            <div id="mx4" class="ramka items-center justify-center">
                <!-- flyer top and bottom -->
                <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
                <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">



                    <div class="flex justify-around w-full">
                        <div class="flex flex-col">
                            <div class="flex flex-col justify-center items-center mb-4 h-8">
                                <p class="text-xl font-semibold text-black">@lang('yelim.title')</p>
                                <img class="w-56 h-1" src="icons/color.png" alt="color">
                            </div>

                            <div class="flex justify-center items-center ">
                                <div class="mr-2 lg:mr-28">
                                    <img class="bedro_singl" src="admin_bedreler/Durs Ekonom.png" alt="DURS">
                                </div>
                                <div class="flex flex-col justify-center items-center text_size">
                                    <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('yelim.name4')</h1>
                                    <div class="text_size">
                                        @lang('yelim.text4')
                                    </div>
                                    <button  class="btn_contact open">@lang('tmex.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                                </div>


                            </div>
                        </div>
                    </div>

            </div>
        </div>
        {{-- yokarky sahypalara scroll etmek un --}}
        <div class="sticky z-50 bottom-0 float-right mr-6 -mt-6 pb-2">
            <a href="#top">
                <svg class="h-[10px] md:h-[15px] lg:h-5 w-[16px] md:w-[24px] lg:w-8 text-white bg-green-800"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="7 11 12 6 17 11" />  <polyline points="7 17 12 12 17 17" />
                </svg>
            </a>
        </div>
    </div>


        <!--LUX Bedre 2-->
        {{-- <div class="ramka items-center justify-center">
            <!-- flyer top and bottom -->
            <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
            <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">



                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">"LUX"</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>

                        <div class="flex justify-center items-center ">
                            <div class="mr-28">
                                <img class="bedro_singl" src="bedreler/desktop ucin/durs-icki-spl.png" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center w-2/4">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('lux.name2')</h1>
                                <div class="text_size">
                                   @lang('lux.text2')
                                </div>
                                <button  class="flex mt-4 open btn_text_size rounded-full text-white  px-4 py-1 font-semibold bg-red-800">@lang('lux.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                            </div>


                        </div>
                    </div>
                </div>

        </div>

        <!--LUX Bedre 3-->
        <div class="ramka items-center justify-center">
            <!-- flyer top and bottom -->
            <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
            <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">



                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">"LUX"</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>

                        <div class="flex justify-center items-center ">
                            <div class="mr-28">
                                <img class="bedro_singl" src="bedreler/desktop ucin/durs-potolok-spl.png" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center w-2/4">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('lux.name3')</h1>
                                <div class="text_size">
                                   @lang('lux.text3')
                                </div>
                                <button  class="flex mt-4 uppercase open btn_text_size rounded-full text-white  px-4 py-1 font-semibold bg-red-800">@lang('lux.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                            </div>


                        </div>
                    </div>
                </div>

        </div> --}}

         {{-- <!--ECONOM Bedre 1-->
        <div class="ramka items-center justify-center">
            <!-- flyer top and bottom -->
            <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
            <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">



                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">"ECONOM"</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>

                        <div class="flex justify-center items-center ">
                            <div class="mr-28">
                                <img class="bedro_singl" src="bedreler/desktop ucin/durs-dasky-spl..png" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center w-2/4">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('econom.name1')</h1>
                                <div class="text_size">
                                   @lang('econom.text1')
                                </div>
                                <button  class="flex mt-4 open btn_text_size rounded-full text-white  px-4 py-1 font-semibold bg-red-800">@lang('econom.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                            </div>


                        </div>
                    </div>
                </div>

        </div>
        <!--ECONOM Bedre 2-->
        <div class="ramka items-center justify-center">
            <!-- flyer top and bottom -->
            <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
            <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">



                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">"ECONOM"</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>

                        <div class="flex justify-center items-center ">
                            <div class="mr-28">
                                <img class="bedro_singl" src="bedreler/desktop ucin/durs-icki-spl..png" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center w-2/4">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('econom.name2')</h1>
                                <div class="text_size">
                                   @lang('econom.text2')
                                </div>
                                <button  class="flex mt-4 open btn_text_size rounded-full text-white  px-4 py-1 font-semibold bg-red-800">@lang('econom.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                            </div>


                        </div>
                    </div>
                </div>

        </div>

        <!--ECONOM Bedre 3-->
        <div class="ramka items-center justify-center">
            <!-- flyer top and bottom -->
            <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
            <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">



                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">"ECONOM"</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>

                        <div class="flex justify-center items-center ">
                            <div class="mr-28">
                                <img class="bedro_singl" src="bedreler/desktop ucin/durs-potolok-spl..png" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center w-2/4">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('econom.name3')</h1>
                                <div class="text_size">
                                   @lang('econom.text3')
                                </div>
                                <button  class="flex uppercase open btn_text_size rounded-full text-white  px-4 py-1 font-semibold bg-red-800 mt-4">@lang('econom.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                            </div>


                        </div>
                    </div>
                </div>

        </div>

        <!--TMEX Bedre 1-->
        <div class="ramka items-center justify-center">
            <!-- flyer top and bottom -->
            <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
            <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">



                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">"TMEX"</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>

                        <div class="flex justify-center items-center ">
                            <div class="mr-28">
                                <img class="bedro_singl" src="bedreler/desktop ucin/tmex-exterior-spl.png" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center w-2/4">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('tmex.name1')</h1>
                                <div class="text_size">
                                    @lang('tmex.text1')
                                </div>
                                <button  class="flex uppercase open btn_text_size rounded-full text-white  px-4 py-1 font-semibold bg-red-800 mt-4">@lang('tmex.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                            </div>


                        </div>
                    </div>
                </div>

        </div>

        <!--TMEX Bedre 2-->
        <div class="ramka items-center justify-center">
            <!-- flyer top and bottom -->
            <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
            <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">



                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">"TMEX"</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>

                        <div class="flex justify-center items-center ">
                            <div class="mr-28">
                                <img class="bedro_singl" src="bedreler/desktop ucin/tmex-interior-spl.png" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center w-2/4">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('tmex.name2')</h1>
                                <div class="text_size">
                                    @lang('tmex.text2')
                                </div>
                                <button  class="flex uppercase open btn_text_size rounded-full text-white  px-4 py-1 font-semibold bg-red-800 mt-4">@lang('tmex.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                            </div>


                        </div>
                    </div>
                </div>

        </div>

        <!--TMEX Bedre 3-->
        <div class="ramka items-center justify-center">
            <!-- flyer top and bottom -->
            <img class="absolute top-0 right-0 flyer_size" src="icons/Flyer_top_r.png" alt="flyer">
            <img class="absolute bottom-0 left-0 flyer_size" src="icons/Flyer_bottom_l.png" alt="flyer">



                <div class="flex justify-around w-full">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center mb-4 h-8">
                            <p class="text-xl font-semibold text-black">"TMEX"</p>
                            <img class="w-56 h-1" src="icons/color.png" alt="color">
                        </div>

                        <div class="flex justify-center items-center ">
                            <div class="mr-28">
                                <img class="bedro_singl" src="bedreler/desktop ucin/tmex-exterior-spl.png" alt="DURS">
                            </div>
                            <div class="flex flex-col justify-center items-center w-2/4">
                                <h1 class="font-bold text-center text-lg leading-5 mb-2">@lang('tmex.name3')</h1>
                                <div class="text_size">
                                    @lang('tmex.text3')
                                </div>
                                <button  class="flex uppercase open btn_text_size rounded-full text-white  px-4 py-1 font-semibold bg-red-800 mt-4">@lang('tmex.contact_us')<svg class="w-4 h-4 ml-2 rotate_svg fill-white stroke-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></button>

                            </div>


                        </div>
                    </div>
                </div>

        </div>
            --}}

@endsection

@section('modal_contact')
    <div id="myModal" class="modal_style_main_div modal">

        <!-- Modal content -->
            <div style="height: 260px" class="rounded-2xl modal-content bg-white w-3/5 drop-shadow-md">
                <div class="flex flex-col justify-center items-center m-0 mb-1">
                    <p class="text-green-600 text-lg font-semibold mb-2">Habarlaşmak üçin</p>
                    <img style="height:2px;" class="m-0 p-0 w-64" src="icons/color.png" alt="">
                </div>

                <span class="close cursor-default absolute text-green-600 right-5 top-1">&times;</span>

                <div class="flex w-auto justify-between">
                    <div class="flex flex-col  6/12">
                            <div class="flex flex-col">
                                <p class="ml-20 text-green-600 font-semibold ">"DÜRS"Hususy Kärhanasy </p>
                                <img style="height:2px;" class="ml-20 p-0 w-46" src="icons/color.png" alt="">
                            </div>
                            <ul class="flex flex-col items-start ml-4">
                                <li class="flex">
                                    <svg class="w-5 h-5 mr-2   stroke-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    Aşgabat, Turkmenistan
                                </li>
                                <li class="flex">
                                    <svg class="w-5 h-5 mr-2 stroke-none fill-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    +99312 76-09-09
                                </li>
                                <li class="flex">
                                    <svg class="w-5 h-5 mr-2 stroke-none fill-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    +99312 76-05-56
                                </li>
                                <li class="flex">
                                    <svg class="w-5 h-5 mr-2 stroke-none fill-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    +99365 56-89-98
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 stroke-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    info@durs.biz
                                </li>
                            </ul>


                    </div>
                    <form autocomplete="off" class="flex flex-col w-6/12 mr-4" action="store" method="post">
                        @csrf
                        <input class="input_style" type="text" name="name" placeholder="Adyňyz" id="">
                        <input class="input_style" type="text" name="phone_number" placeholder="Telefon belgiňiz" id="">
                        <input class="input_style" type="email" name="email" placeholder="Email" id="">
                        <textarea class="text_border border-gray-400 my-2"  placeholder="Hatyňyzy şu ýerde ýazyp bilersiňiz..." name="text" id="" cols="150" rows="3"></textarea>
                        <label class="button_style" for="submit">
                            <svg class="w-5 h-5 rotate-45 stroke-none fill-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                            Ugrat
                        </label>

                        <input class="hidden" id="submit" type="submit" value="">

                </form>
                </div>


            </div>

    </div>
@endsection


