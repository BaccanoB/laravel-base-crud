<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.css' integrity='sha512-Mg1KlCCytTmTBaDGnima6U63W48qG1y/PnRdYNj3nPQh3H6PVumcrKViACYJy58uQexRUrBqoADGz2p4CdmvYQ==' crossorigin='anonymous'/>
        <title>Laravel-base-crud</title>
    </head>
    <body>

        @include('partials.header')

        <main class="container my-5">
            @yield('content')
        </main>

        @include('partials.footer')

        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.js' integrity='sha512-nw7zwODD4UD9u/C/CO+03s7jXvOZDomBNFX3oOq7Xv0stAyxsxhJzVlxsRTgH3AxK3sK2ijMQou2aSIaorp19g==' crossorigin='anonymous'></script>
    </body>
</html>
