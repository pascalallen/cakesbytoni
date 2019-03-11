<!-- welcome.blade.php -->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cakes By Toni - Welcome</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <style>
            body {
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div id="react"></div>
        <script src="{{asset('js/app.js')}}" ></script>
    </body>
</html>