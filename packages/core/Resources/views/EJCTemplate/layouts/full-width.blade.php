<!DOCTYPE html>
<html lang="en">
<head>
    @include('core::EJCTemplate.includes.head')
</head>
<body>
      @include('core::EJCTemplate.includes.header')

      @include('core::EJCTemplate.includes.breadcrumb')

      <div class="row">
           @yield('content')
      </div>
      @include('core::EJCTemplate.includes.footer')

</body>
</html>