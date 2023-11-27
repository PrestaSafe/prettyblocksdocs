<div class="relative text-white bg-gray-50 dark:bg-gray-800">
    <div
        class="flex items-center justify-between gap-6 px-6 py-3 mx-auto max-w-7xl sm:py-4"
    >
        <a
            href="/"
            class="inline-flex items-center gap-3 transition rounded hover:text-white/80 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-red-600"
        >
            <img src="{{ asset('img/logo-prettyblocks-x2.png') }}" class="h-8 dark:hidden">
            <img src="{{ asset('img/logo-prettyblocks-x2.png') }}" class="hidden h-8 dark:block">
            <span class="sr-only">PrettyBlocks</span>
        </a>

        <div class="flex items-center space-x-12">
            <div id="docsearch"></div>

            {{-- <a href="https://discord.gg/X62tWNStZK">
                <x-icons.discord class="w-5 h-5 dark:fill-white" />
            </a> --}}

            <a href="https://github.com/PrettyBlocks">
                <x-icons.github class="w-5 h-5 dark:fill-white" />
            </a>

            <a href="https://www.prestasafe.com" class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                PrestaSafe
            </a>
            <a href="https://github.com/PrestaSafe/prettyblocks" class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                Github
            </a>
            <a href="https://www.prestasafe.com/themes-prestashop" class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                Themes PrettyBlocks
            </a>
            <a href="https://github.com/sponsors/PrestaSafe" class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                Sponsor us
            </a>
        </div>
    </div>
</div>
