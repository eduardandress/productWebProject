<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ trans('messages.uninstalling') }}</title>

   <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-16x16.png') }}" sizes="16x16"/>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-96x96.png') }}" sizes="96x96"/>
    <link href="{{ asset('installer/css/style.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/materialize.min.css') }}" rel="stylesheet"/>
    <link href="{{URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">

    <link href="{{URL::asset('assets/font-awesome-4.6.3/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <script src="{{URL::asset('assets/js/jquery-3.1.0.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/materialize.js')}}"></script>
</head>
<body>
    <div class="master">
      <div class="container uninstall">
        
          <div class="col s12 m7">
            <h2 class="header cyan white-text">{{trans('messages.uninstallingApp')}}</h2>
            <div class="card horizontal">
              <div class="card-image">
                <img src="{{URL::asset('installer/img/uninstall.jpg')}}">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p>{{trans('messages.uninstallAreYouSure')}}</p>
                </div>
                <div class="card-action right-align">
                  <a href="{{ route('EJCInstaller::uninstall') }}">{{trans('messages.uninstall')}}</a>
                  <a href="{{ route('CoreRoutes::landing_page') }}">{{trans('messages.cancel')}}</a>

                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</body>
</html>