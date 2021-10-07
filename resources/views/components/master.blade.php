<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Styles -->
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



</head>
<body>
<div id="app">

    <section class="px-8 py-4 mb-6">
        <header class="container mx-auto">
            <h1>
                <img src="/images/604a50941e704a67adf2d1da07807079.png"
                     alt="TweetyReety"
                >



            </h1>
        </header>
    </section>
    {{$slot}}
</div>
<script src="http://unpkg.com/turbolinks">

</script>
</body>
</html>
