<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')
    </head>
    <body>
        @include('partials.sidebar')
        @yield('body')
        @include('partials.script')
        @yield('script')
        {{-- @include('sweetalert::alert') --}}
        @include('partials.footer')
    </body>
</html>