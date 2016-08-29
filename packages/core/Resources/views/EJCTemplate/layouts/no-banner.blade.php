<!DOCTYPE html>
<html lang="en">
<head>
    @include('core::EJCTemplate.includes.head')
</head>
<body>
        @include('core::EJCTemplate.includes.header')
        @include('core::EJCTemplate.includes.breadcrumb')

        <div class="row">

                <div class="col s12 m4 l3">
                    @yield('sidebar-content')
                </div>

                <div class="col s12 m8 l9">
                    @yield('content')
                </div>
        </div>
        @include('core::EJCTemplate.includes.footer')

</body>
</html>