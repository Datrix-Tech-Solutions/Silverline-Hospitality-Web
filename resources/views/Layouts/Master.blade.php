<!DOCTYPE html>
<html lang="zxx">

@include('Layouts.Head')

<body class="menu-layer">
    @include('Layouts.Pre-Loader')
    @include('Layouts.Header')
    @yield('content')


    @include('Layouts.Footer')


    @include('Layouts.Scripts')
</body>
