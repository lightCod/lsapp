<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'LSAPP')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <style>
            body {
                padding-top: 5rem;
            }
            .starter-template {
                padding: 3rem 1.5rem;
            }
        </style>
    </head>
    <body>
        @include('inc.navbar')
        <main role="main" class="container">
            <div class="starter-template">
                @yield('content')
            </div>
        </main>
    </body>
</html>