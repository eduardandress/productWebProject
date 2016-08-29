<!DOCTYPE html>
<html lang="en">
<head>
    @include('core::EJCTemplate.includes.head')
</head>
<body>
		<header>
	        @include('core::EJCTemplate.includes.header')
	        @include('core::EJCTemplate.includes.bannersection')
		</header>

        <div class="container-fluid">
                @yield('content')
        </div>

    @include('core::EJCTemplate.includes.footer')
	  @yield('scripts')
</body>
</html>