<div class="navbar-fixed">
  <nav class="grey darken-3" role="navigation">
    <div class="nav-wrapper container-fliud"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('CoreRoutes::landing_page') }}">{{trans('core::menu.home')}}</a></li>
        <li><a href="products">{{trans('core::menu.products')}}</a></li>
        <li><a href="about">{{trans('core::menu.aboutUs')}}</a></li>
        <li><a href="contact">{{trans('core::menu.contactUs')}}</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact us</a></li>

      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

 
            