<!doctype html>
<html lang="en">

<head>
    {{-- Head File --}}
    @include('frontend.layouts.head')
</head>

<body>
    
    @include('frontend.layouts.menu')

    {{-- Main Content --}}
    @yield('content')

    {{-- Footer File --}}
    @include('frontend.layouts.footer')
    
    {{-- Script File --}}
    @include('frontend.layouts.script')

</body>

</html>
