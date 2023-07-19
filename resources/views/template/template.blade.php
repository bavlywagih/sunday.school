<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="_token" content="{{ csrf_token() }}">
        <title>مدارس احد عمود الدين</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
        @include('components/style/style')


        <x-head.tinymce-config/>
        <style>html.dark body .mce-content-body::before {
            color: white;
        }</style>
    </head>
    <body>

        <x-navbar.navbar></x-navbar.navbar>
        @include('errors.errors-container')
        @include('components/top')
        @yield('content')
        <script src="{{ asset('js/app.js') }}"></script>

        <script>


        </script>
    </body>
</html>

