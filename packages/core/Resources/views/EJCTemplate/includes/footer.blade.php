  <footer class="page-footer {{$demoColors['thirdColorClass'] or '' }} grey-text text-lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 >@if(!is_null($companyInfo)){{$companyInfo->name or 'CompanyName'}} @else {{trans('core::main.companyName')}} @endif</h5>
          <p id="descriptionCompany" style="word-wrap: break-word">@if(!is_null($companyInfo)){{$companyInfo->description or 'Description' }} @else {{trans('core::main.companyDescription')}} @endif</p>

        </div>
        <div class="col l3 s12">
          <h5 >{{trans('core::main.navigation') }}</h5>
          <ul>
            <li><a  href="{{ route('CoreRoutes::landing_page') }}">{{trans('core::menu.home')}}</a></li>
            <li><a  href="about">{{trans('core::menu.aboutUs')}}</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 >{{trans('core::main.connectWithUs')}}</h5>
          <ul>
          @if(!is_null($companyInfo) and isset($companyInfo->mainFacebookProfile))
            <li> <a  target="_blank" href="{{$companyInfo->mainFacebookProfile}}"><i class="fa fa-facebook-square"></i> Facebook</a></li>
          @endif
          @if(!is_null($companyInfo) and isset($companyInfo->mainTwitterProfile))
            <li><a  target="_blank" href="{{$companyInfo->mainTwitterProfile}}"><i class="fa fa-twitter-square"></i> Twitter</a></li>
          @endif
          @if(!is_null($companyInfo) and isset($companyInfo->mainInstagramProfile))
            <li><a  target="_blank" href="{{$companyInfo->mainInstagramProfile}}"><i class="fa fa-instagram"></i> Instagram</a></li>
          @endif
          @if(!is_null($companyInfo) and isset($companyInfo->mainGooglePlusProfile))
            <li><a  target="_blank" href="{{$companyInfo->mainGooglePlusProfile}}"><i class="fa fa-google-plus-official"></i> Google +</a></li>
          @endif
          @if(!is_null($companyInfo) and isset($companyInfo->mainLinkedInProfile))
            <li><a  target="_blank" href="{{$companyInfo->mainLinkedInProfile}}"><i class="fa fa-linkedin-square"></i> LinkedIn</a></li>
          @endif
          @if(!is_null($companyInfo) and isset($companyInfo->mainEmail))
            <li><a  href="#!"><i class="fa fa-envelope"></i> {{$companyInfo->mainEmail}}</a></li>
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
    <button class="material-scrolltop {{$demoColors['mainColorClass']}}" type="button"></button>
  </footer>


  <!--  Scripts-->
  <script src="{{URL::asset('assets/js/jquery-3.1.0.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/materialize.js')}}"></script>
  <script src="{{URL::asset('assets/mScrollTop/material-scrolltop.js')}}"></script>
  <script src="{{URL::asset('assets/js/init.js')}}"></script>
  <script src="{{URL::asset('assets/js/readmore.js')}}"></script>






