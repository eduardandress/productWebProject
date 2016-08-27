<div class="navbar-fixed">
  <nav class="grey darken-3" role="navigation">
    <div class="nav-wrapper container">
    
    <a id="logo-container" href="#" class="brand-logo">
        <img class="img-responsive" height="64px" src="{{URL::asset($companyInfo->logoURL)}}">
    </a>

      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('CoreRoutes::landing_page') }}">{{trans('core::menu.home')}}</a></li>
        <li><a href="products">{{trans('core::menu.products')}}</a></li>
        <li><a href="about">{{trans('core::menu.aboutUs')}}</a></li>
        <li><a href="contact">{{trans('core::menu.contactUs')}}</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ route('CoreRoutes::landing_page') }}">{{trans('core::menu.home')}}</a></li>
        <li><a href="products">{{trans('core::menu.products')}}</a></li>
        <li><a href="about">{{trans('core::menu.aboutUs')}}</a></li>
        <li><a href="contact">{{trans('core::menu.contactUs')}}</a></li>

      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

 
            