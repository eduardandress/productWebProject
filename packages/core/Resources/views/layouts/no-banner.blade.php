<!DOCTYPE html>
<html lang="en">
<head>
    @include('core::includes.head')
</head>
<body>

        @include('core::includes.header')

        @include('core::includes.breadcrumb')

        <div class="row">

                <div class="col s12 m4 l3">
                    @yield('sidebar-content')
                </div>

                <div class="col s12 m8 l9">
                    @yield('content')
                </div>
        </div>
        @include('core::includes.footer')

</body>
</html>