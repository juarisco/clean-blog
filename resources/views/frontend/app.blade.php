<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.layouts.head')

</head>

<body>

    @include('frontend.layouts.header')

    <!-- Main Content -->
    {{-- @include('frontend.app') --}}
    @yield('content')

    <!-- Footer -->
    @include('frontend.layouts.footer')
</body>

</html>