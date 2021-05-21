<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script> <!-- Instalacion de Bootstrap@4.6 - JS [laravel/ui] -->
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Instalacion de Bootstrap@4.6 - CSS [laravel/ui] -->

        <title>@yield('title')</title>      
    </head>
    <body>
            <x-header> <!-- COMPONENTE DEL HEADER -->
                <x-slot name="color"> 
                    @php
                        if (request()->routeIs('hospital.*')) { #LOGICA PARA ELEGIR COLOR SEGUN URL
                            echo '#533B78';
                        } else if (request()->routeIs('patient.*')) {
                            echo '#154360';
                        } else if (request()->routeIs('doctor.*')) {
                            echo '#117864';
                        } else {
                            echo '#533B78';
                        }
                    @endphp
                </x-slot> <!-- SLOT PARA COLOR DEL HEADER -->
            </x-header>

            <x-nav />

            @yield('content') 

            <x-footer>
                <x-slot name="texto">
                    <h4 class="font-weight-normal text-center"> Proyecto Final Desarollo Web II </h4>
                </x-slot>
            </x-footer>
    </body>
</html>
