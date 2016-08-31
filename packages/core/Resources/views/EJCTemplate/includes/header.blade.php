<div id="main-navbar" class="navbar-fixed">
  <nav class="{{$demoColors['secondColorClass'] or '' }} {{$demoColors['navBarColorText'] or '' }}" role="navigation">

    <div class="nav-wrapper container-fluid">


      <a id="logo-container" href="#" class="brand-logo">
          <img height="64px" class="img-responsive" src="@if(!is_null($companyInfo)) {{URL::asset($companyInfo->logoURL)}} @else {{URL::asset('assets/images/company.svg')}} @endif">
          <span class="compName {{$demoColors['navBarColorText'] or '' }}">@if(!is_null($companyInfo)) {{$companyInfo->name or 'CompanyName'}}  @endif </span>
      </a>

      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('CoreRoutes::landing_page') }}">{{trans('core::menu.home')}}</a></li>
        <li><a href="products">{{trans('core::menu.products')}}</a></li>
        <li><a href="about">{{trans('core::menu.aboutUs')}}</a></li>
        <li><a href="contact">{{trans('core::menu.contactUs')}}</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav {{$demoColors['secondColorClass'] or '' }} ">
        <li><a href="{{ route('CoreRoutes::landing_page') }}">{{trans('core::menu.home')}}</a></li>
        <li><a href="products">{{trans('core::menu.products')}}</a></li>
        <li><a href="about">{{trans('core::menu.aboutUs')}}</a></li>
        <li><a href="contact">{{trans('core::menu.contactUs')}}</a></li>

      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

 
            