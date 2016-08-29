<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ trans('messages.title') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-16x16.png') }}" sizes="16x16"/>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-96x96.png') }}" sizes="96x96"/>
    <link href="{{ asset('installer/css/style.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/materialize.min.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{URL::asset('assets/font-awesome-4.6.3/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="{{URL::asset('assets/dropify/css/dropify.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <script src="{{URL::asset('assets/js/jquery-3.1.0.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/materialize.js')}}"></script>
    <script src="{{URL::asset('assets/dropify/js/dropify.min.js')}}"></script>


  </head>
  <body>
    <div class="master">
      <div class="col s6">
        <div class="box">
          <div class="header">
              <h1 class="header__title">@yield('title')</h1>
          </div>
          <ul class="step">
            <li class="step__divider"></li>
            <li class="step__item {{ isActive('EJCInstaller::final') }}"><i class="step__icon database"></i></li>
            <li class="step__divider"></li>
            <li class="step__item {{ isActive('EJCInstaller::company') }}"><i class="step__icon  fa-building"></i></li>
            <li class="step__divider"></li>
            <li class="step__item {{ isActive('EJCInstaller::permissions') }}"><i class="step__icon permissions"></i></li>
            <li class="step__divider"></li>
            <li class="step__item {{ isActive('EJCInstaller::requirements') }}"><i class="step__icon requirements"></i></li>
            <li class="step__divider"></li>
            <li class="step__item {{ isActive('EJCInstaller::environment') }}"><i class="step__icon update"></i></li>
            <li class="step__divider"></li>
            <li class="step__item {{ isActive('EJCInstaller::welcome') }}"><i class="step__icon welcome"></i></li>
            <li class="step__divider"></li>
          </ul>
          <div class="main">
            @yield('container')
          </div>
        </div>
      </div>  
    </div>
  </body>
</html>