<!DOCTYPE html>
<html lang="en">
<head>
    @include('core::includes.head')
</head>
<body>
		<header>
	        @include('core::includes.header')
	        @include('core::includes.bannersection')
		</header>

        <div class="container-fluid">
                @yield('content')
        </div>

        @include('core::includes.footer')
		@yield('scripts')
</body>
</html>