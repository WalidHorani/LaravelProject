<!DOCTYPE html>
    @php
        $dir = session('lang') === 'en'?'ltr':'rtl';
    @endphp
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir={{$dir }}>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <title>@yield('Title')</title>
        </head>
        <body>
            <div class="container">

                @include('Templet.header')

                @yield('content')

                @include('Templet.footer')

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            </div>
        </body>
    </html>
