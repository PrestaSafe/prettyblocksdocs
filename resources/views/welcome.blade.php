<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PrettyBlocks | Open source page builder for PrestaShop</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link
            href="https://fonts.bunny.net/css?family=be-vietnam-pro:700|inter:400,500,600|rubik:400,700"
            rel="stylesheet"
        />
        <link rel="icon" href="img/logo-prettyblocks-x2.png" type="image/svg+xml">
        @vite(["resources/css/app.css", "resources/js/app.js"])

        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="HALHTNZU" defer></script>
        <!-- / Fathom -->
    </head>
    <body class="w-full h-screen text-slate-900 bg-gray-50 dark:bg-gray-900 dark:text-white">
        <main id="app" class="flex flex-col items-center justify-center min-h-screen">
            <header class="flex flex-col items-center justify-center flex-1 gap-12 text-center md:py-12">
                <img src="{{ asset('img/logo-prettyblocks-x2.png') }}" class="px-12 lg:h-64 dark:hidden">
                <img src="{{ asset('img/logo-prettyblocks-x2.png') }}" class="hidden px-12 lg:h-64 dark:block">
                <h1 class="sr-only">PrettyBlocks</h1>
                <h2 class="px-6 mt-12 text-lg leading-tight lg:text-2xl md:text-xl">
                    PrettyBlocks est le premier page builder open source pour PrestaShop.
                </h2>
                <div class="flex flex-col items-center mt-6 sm:flex-row sm:space-x-6">
                    <a href="/docs/3" class="w-full px-12 py-4 text-lg font-bold text-gray-900 bg-white border rounded-lg sm:w-auto focus:outline-none">
                        Get started
                    </a>
                    <a href="https://github.com/PrestaSafe/prettyblocks" target="_blank" class="w-full px-12 py-4 mt-3 text-lg font-bold text-gray-900 bg-transparent border rounded-lg dark:text-white sm:w-auto focus:outline-none sm:mt-0">
                        Source code
                    </a>
                </div>




                <div class="mt-6 px-12 ">
                    <h2 class="text-2xl font-bold">Sponsors</h2>

                    <a href="https://www.devle.fr/" target="_blank" class="bg-white block">
                        <img src="{{ asset('img/cropped-logo_devle_jaune_fond_blanc_fleche_jaune.png') }}" class="block">
                    </a>
                </div>

                <div class="mt-6 px-12">
                    <h2 class="text-2xl font-bold">Contributors</h2>

                    <a href="https://www.creabilis.com/" target="_blank">
                        <img src="{{ asset('img/creabilis.png') }}" class="block">
                    </a>
                </div>
            </header>

            <div class="border rounded-lg border-indigo-500 flex p-5 items-center justify-center">
                <div class="w-1/3 text-center">
                    <h2 class="text-2xl font-bold">
                        Free & open source
                    </h2>
                    <p class="break-words"> Le premier page builder pour PrestaShop  free et open source.</p>
                </div>
                <div class="w-1/3 text-center">
                    <h2 class="text-2xl font-bold">
                       Compatibles avec tous les thèmes
                    </h2>
                    <p class="break-words">
                        PrettyBlocks est compatible  avec tous les thèmes PrestaShop.
                    </p>
                </div>

                <div class="w-1/3 text-center">
                    <h2 class="text-2xl font-bold">
                        Friendly user & dev
                    </h2>
                    <p class="break-words">
                        PrettyBlocks est un page builder  simple et facile à utiliser  pour les marchands et les développeurs.
                    </p>
                </div>
            </div>

            <footer class="justify-end p-12 md:px-0">

                <small class="block text-sm text-center md:text-xs">© {{ date('Y') }} PrettyBlocks Made By ❤️ by <a href="https://www.prestasafe.com">PrestaSafe</a> </small>
            </footer>

        </main>

    </body>
</html>
