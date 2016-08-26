<!DOCTYPE html>
<html lang="en">
<head>
    @include('core::includes.head')
</head>
<body>

        @include('core::includes.header')
        @include('core::includes.bannersection')

        <div class="container">
                @yield('content')
        </div>

        @include('core::includes.footer')

</body>
</html>