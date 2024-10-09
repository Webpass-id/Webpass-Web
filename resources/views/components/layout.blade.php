<!DOCTYPE html>
<html lang="en">
@include('components.header')

<body id="top">
    @include('components.nav')
    @yield('content')
    @include('components.footer')
    @include('components.script')
</body>


</html>