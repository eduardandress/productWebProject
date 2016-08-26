  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">{{$companyInfo->name or 'CompanyName'}}</h5>
          <p class="grey-text text-lighten-4" style="word-wrap: break-word">{{$companyInfo->description or 'Description' }}</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">{{trans('core::main.navigation') }}</h5>
          <ul>
            <li><a class="white-text" href="{{ route('CoreRoutes::landing_page') }}">{{trans('core::menu.home')}}</a></li>
            <li><a class="white-text" href="products">{{trans('core::menu.products')}}</a></li>
            <li><a class="white-text" href="about">{{trans('core::menu.aboutUs')}}</a></li>
            <li><a class="white-text" href="contact">{{trans('core::menu.contactUs')}}</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">{{trans('core::main.connectWithUs')}}</h5>
          <ul>
          @if(isset($companyInfo->mainFacebookProfile))
            <li> <a class="white-text" target="_blank" href="{{$companyInfo->mainFacebookProfile}}"><i class="fa fa-facebook-square"></i> Facebook</a></li>
          @endif
          @if(isset($companyInfo->mainTwitterProfile))
            <li><a class="white-text" target="_blank" href="{{$companyInfo->mainTwitterProfile}}"><i class="fa fa-twitter-square"></i> Twitter</a></li>
          @endif
          @if(isset($companyInfo->mainInstagramProfile))
            <li><a class="white-text" target="_blank" href="{{$companyInfo->mainInstagramProfile}}"><i class="fa fa-instagram"></i> Instagram</a></li>
          @endif
          @if(isset($companyInfo->mainGooglePlusProfile))
            <li><a class="white-text" target="_blank" href="{{$companyInfo->mainGooglePlusProfile}}"><i class="fa fa-google-plus-official"></i> Google +</a></li>
          @endif
          @if(isset($companyInfo->mainLinkedInProfile))
            <li><a class="white-text" target="_blank" href="{{$companyInfo->mainLinkedInProfile}}"><i class="fa fa-linkedin-square"></i> LinkedIn</a></li>
          @endif
          @if(isset($companyInfo->mainEmail))
            <li><a class="white-text" href="#!"><i class="fa fa-envelope"></i> {{$companyInfo->mainEmail}}</a></li>
          @endif
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#!">E&JC</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{{URL::asset('assets/js/jquery-3.1.0.min.js')}}"></script>

  <script src="{{URL::asset('assets/js/materialize.js')}}"></script>
  <script src="{{URL::asset('assets/js/init.js')}}"></script>


