<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ trans('messages.error') }}</title>

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
     <div id="site-layout-example-top" class="col s12">
      <p class="flat-text-logo center white-text caption-uppercase">Internal server error</p>
     </div>
    </div>
</body>
</html>