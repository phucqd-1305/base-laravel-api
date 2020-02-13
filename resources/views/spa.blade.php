<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/ico" href="favicon.ico">

    <script src="{{ webpack('vendor.js') }}" ></script>
    <script src="{{ webpack('app.js') }}" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    @if (webpack_file_exists('app.css')) {{-- app.css is not available while running `yarn dev` --}}
        <link href="{{ webpack('app.css') }}" rel="stylesheet">
    @endif
</head>
<body>
    <div id="app"></div>

    <script type="text/javascript">window.GLOBALS={"auth":{!! json_encode($auth) !!}}</script>
</body>
</html>
