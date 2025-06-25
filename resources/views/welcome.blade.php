<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="FiscaConsult, fiscaconsult">
        <meta name="description" content="Le site de FiscaConsult">
        <meta name="keywords" content="fiscaconsult, Fisca Consult, FiscaConsult, olivier, pagnoul, Olivier, Pagnoul, Olivier Pagnoul">

        <title>{{config('app.name')}}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body id="top" class="body">
        <h1 class="hidden">{{config('app.name')}}</h1>

        <header>
            <nav class="main_nav">
                <h2 class="hidden">Navigation principale</h2>

                <ul class="main_nav_list">
                    <li class="main_nav_list_item"><a class="main_nav_list_item_link link bold" href="#contact" title="Aller vers la section contact">Contact</a></li>
                    <li class="main_nav_list_item"><a class="main_nav_list_item_link link" href="#team" title="Aller vers la section notre &eacute;quipe">Notre &eacute;quipe</a></li>
                    <li class="main_nav_list_item"><a class="main_nav_list_item_link link" href="#office" title="Aller vers la section notre cabinet">Notre cabinet</a></li>
                    <li class="main_nav_list_item"><a class="main_nav_list_item_link link" href="#mission" title="Aller vers la section notre mission">Notre mission</a></li>
                    <li class="main_nav_list_item"><a class="main_nav_list_item_link link" href="#expertise" title="Aller vers la section notre expertise">Notre expertise</a></li>
                </ul>
            </nav>
        </header>

        <livewire:welcome-page.welcome/>

        <div x-data="{ showScrollTop: false }" x-init="window.addEventListener('scroll', () => {
        showScrollTop = window.scrollY > 100;})">
            <a href="#top"
                title="Remonter en haut de la page"
                class="top_link"
                x-show="showScrollTop"
                x-transition>
                <svg clip-rule="evenodd" fill-rule="evenodd" fill="white" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m18.787 9.473s-4.505-4.502-6.259-6.255c-.147-.146-.339-.22-.53-.22-.192 0-.384.074-.531.22-1.753 1.753-6.256 6.252-6.256 6.252-.147.147-.219.339-.217.532.001.19.075.38.221.525.292.293.766.295 1.056.004l4.977-4.976v14.692c0 .414.336.75.75.75.413 0 .75-.336.75-.75v-14.692l4.978 4.978c.289.29.762.287 1.055-.006.145-.145.219-.335.221-.525.002-.192-.07-.384-.215-.529z" fill-rule="nonzero"/></svg>
            </a>
        </div>
    </body>

</html>
