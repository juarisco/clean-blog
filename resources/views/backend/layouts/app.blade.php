<!doctype html>
<html lang="en">
<head>
    @include('backend.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
    @include('backend.layouts.header')
    @include('backend.layouts.sidebar')

    @yield('content')

    @include('backend.layouts.footer')
</div>
</body>
</html>