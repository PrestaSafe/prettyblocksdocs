<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="{{ asset('img/logo-prettyblocks-x2.png') }}" type="image/svg+xml">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"/></pre></li>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
        href="https://fonts.bunny.net/css?family=be-vietnam-pro:700|inter:400,500,600|rubik:400,700"
        rel="stylesheet"
    />

    @vite(["resources/css/app.css", "resources/js/app.js"])

    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="HALHTNZU" defer></script>
    <!-- / Fathom -->
</head>
<body class="min-h-screen font-sans antialiased bg-white dark:bg-gray-900 dark:text-white">
<x-banner />
{{ $slot }}
<script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>
{{-- <script type="text/javascript">
    docsearch({
        appId: 'ZDW7UGKGMQ',
        apiKey: 'ed9c6323ad82a4c7af6dc3a0e8a493c4',
        indexName: 'docs_index',
        insights: true,
        container: '#docsearch',
        debug: true,
        // level0: 'lvl0',
        // level1: 'lvl1',
        // level2: 'lvl2',
        // level3: 'lvl3',
    });
</script> --}}
</body>
</html>
