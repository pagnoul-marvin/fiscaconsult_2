<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="FiscaConsult, fiscaconsult, Fisca Consult">
        <meta name="description" content="@yield('description')">
        <meta name="keywords"
              content="fiscaconsult, Fisca Consult, FiscaConsult, olivier, pagnoul, Olivier Pagnoul, comptable, expert-comptable, bureau de comptable, liège, crisnée, belgique, Herve, herve, verviers, Verviers">

        <title>@yield('title')</title>

        <link rel="canonical" href="@yield('canonical', config('site.url'))">
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <meta property="og:title" content="@yield('og_title', trim(View::yieldContent('title')))">
        <meta property="og:description" content="@yield('og_description', trim(View::yieldContent('description')))">
        <meta property="og:url" content="@yield('canonical', config('site.url'))">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="fr_BE">
        <meta property="og:image" content="{{ config('site.url') }}{{ config('site.og_image') }}">

        @verbatim
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "AccountingService",
              "name": "FiscaConsult",
              "url": "https://www.fiscaconsult.com",
              "image": "https://www.fiscaconsult.com/assets/images/optimized/office_3-800.webp",
              "telephone": "+32 476 26 26 39",
              "email": "olivier.pagnoul@fiscaconsult.com",
              "description": "Expert-comptable fiscaliste à Crisnée et Herve. Services aux indépendants, PME, professions médicales et libérales depuis 1989.",
              "foundingDate": "1989",
              "openingHours": "Mo-Fr 08:00-17:00",
              "sameAs": [
                  "https://www.linkedin.com/in/olivier-pagnoul-84a6a2128/"
              ],
              "location": [
                {
                  "@type": "Place",
                  "name": "FiscaConsult Herve",
                  "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Rue Ann-Sophie Charlier, 29/7",
                    "postalCode": "4650",
                    "addressLocality": "Herve",
                    "addressRegion": "Liège",
                    "addressCountry": "BE"
                  }
                },
                {
                  "@type": "Place",
                  "name": "FiscaConsult Crisnée",
                  "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Grand'Route 18A",
                    "postalCode": "4367",
                    "addressLocality": "Crisnée",
                    "addressRegion": "Liège",
                    "addressCountry": "BE"
                  }
                }
              ],
              "employee": [
                {
                  "@type": "Person",
                  "name": "Olivier Pagnoul",
                  "jobTitle": "Expert-comptable fiscaliste",
                  "email": "olivier.pagnoul@fiscaconsult.com",
                  "telephone": "+32476262639"
                },
                {
                  "@type": "Person",
                  "name": "Nathalie Brugmans",
                  "jobTitle": "Expert-comptable fiscaliste",
                  "email": "nathalie.brugmans@fiscaconsult.com",
                  "telephone": "+32478440913"
                }
              ],
              "founder": {
                "@type": "Person",
                "name": "Olivier Pagnoul"
              },
              "areaServed": [
                { "@type": "City", "name": "Herve" },
                { "@type": "City", "name": "Crisnée" },
                { "@type": "City", "name": "Liège" },
                { "@type": "City", "name": "Verviers" },
                { "@type": "Country", "name": "Belgique" }
              ]
            }
        </script>
        @endverbatim

        @stack('head')

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body id="top" class="body @yield('body_class')" itemscope itemtype="https://schema.org/AccountingService">
        <header>
            @include('partials.nav.main')
        </header>

        <main>
            @yield('content')
        </main>

        <a x-data="{ showScrollTop: false }" x-init="window.addEventListener('scroll', () => {
                showScrollTop = window.scrollY > 100;})"
           href="#top"
           title="Remonter en haut de la page"
           class="top_link"
           x-show="showScrollTop"
           x-transition>
            <svg clip-rule="evenodd" fill-rule="evenodd" fill="white" stroke-linejoin="round" stroke-miterlimit="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m18.787 9.473s-4.505-4.502-6.259-6.255c-.147-.146-.339-.22-.53-.22-.192 0-.384.074-.531.22-1.753 1.753-6.256 6.252-6.256 6.252-.147.147-.219.339-.217.532.001.19.075.38.221.525.292.293.766.295 1.056.004l4.977-4.976v14.692c0 .414.336.75.75.75.413 0 .75-.336.75-.75v-14.692l4.978 4.978c.289.29.762.287 1.055-.006.145-.145.219-.335.221-.525.002-.192-.07-.384-.215-.529z"
                    fill-rule="nonzero"/>
            </svg>
        </a>

        @include('partials.nav.footer')
    </body>
</html>