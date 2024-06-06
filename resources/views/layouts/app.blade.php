<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')
    </head>
    @include('partials.sidebar')
    <body>
        @yield('body')
        {{-- @include('sweetalert::alert') --}}
        {{-- @include('partials.footer') --}}
    </body>
    @yield('script')
    @include('partials.script')
</html>