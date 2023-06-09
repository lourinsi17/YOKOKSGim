<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GIM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter+Tight&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}"/>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" id="rectangle">
                    <div id="GIM">
                        YOKOKS
                    </div>

                        @auth
                            <a href="{{ url('/dashboard') }}">
                                <div class="btnContainer login row" style="background-color: #555; color: #fff;">
                                    <div id="GymIcon" class="col">
                                        <img src="/imgs/Yokoks Logo without name png.png" alt="Yokoks logo" id="GymIconPng" style="width: 30px; height: 30px;">
                                    </div>
                                    <div class="btnText" class="col">
                                        Home
                                    </div>
                                </div>
                            </a>
                        @else
                            
                                <a href="{{ route('login') }}" >   
                                <div class="btnContainer login row" style="background-color: #555; color: #fff;">
                                    <div id="GymIcon" class="col">
                                        <img src="/imgs/Yokoks Logo without name png.png" alt="Yokoks logo" id="GymIconPng" style="width: 30px; height: 30px;">
                                    </div>

                                    <div class="btnText col" style="color: #fff;">
                                        Login
                                    </div>
                                </div>    
                                </a>


                                @if (Route::has('register'))
                                    <!-- <a href="{{ route('register') }}"  class="btnContainer register">
                                        <div class="btnText">
                                            Register
                                        </div>
                                    </a> -->
                                @endif
                            
                        @endauth
                </div>

            @endif
        </div>

    </body>
</html>
