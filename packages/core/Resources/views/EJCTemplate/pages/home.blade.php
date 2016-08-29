@extends('core::EJCTemplate.layouts.default')
@section('content')

  <!--Section 1 -->
  <section class="section {{$demoColors['mainColorClass'] or '' }} {{$demoColors['secondFontColorClass'] or '' }}  center">
    <h2 class="{{$demoColors['sectionTitleFontColor'] or '' }}">{{trans('core::main.section1Message1')}}</h2>
    <p>{{trans('core::main.section1Message2')}}</p>
    <a class="waves-effect waves-light {{$demoColors['secondColorClass'] or '' }} {{$demoColors['buttonColorText'] or '' }}   btn-large"><i class="fa fa-thumbs-up"></i> {{trans('core::main.section1ButtonText')}}</a>
  </section>

    <!--  Section 2 - Icon Section   -->
  <section class="section">
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center {{$demoColors['thirdFontColorClass'] or '' }} "><i class="material-icons">settings</i></h2>
          <h5 class="center">{{trans('core::main.section2Card1Message1')}}</h5>

          <p class="light">{{trans('core::main.section2Card1Message2')}}</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center {{$demoColors['thirdFontColorClass'] or '' }}"><i class="material-icons">flash_on</i></h2>
          <h5 class="center">{{trans('core::main.section2Card2Message1')}}</h5>
          <p class="light">{{trans('core::main.section2Card2Message2')}}</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center {{$demoColors['thirdFontColorClass'] or '' }}"><i class="material-icons">group</i></h2>
          <h5 class="center">{{trans('core::main.section2Card3Message1')}}</h5>
          <p class="light">{{trans('core::main.section2Card3Message2')}}</p>
        </div>
      </div>
    </div>
  </section>
  <div class="divider"></div>

  <!-- Section 3 - Best products section -->
  @if(!is_null($bestProducts) and count($bestProducts) > 0)
    <section class="section center">
      <h2>{{trans('core::main.section3Message1')}}</h2>
      <div class="container">
        <div class="flex-row">
          @foreach ($bestProducts as $product)
            <div class="flex-item product-item">
              <div class="card ">
                <div class="card-image">
                  <img src="{{URL::asset($product->mainPictureURL)}}">
                  <span class="card-title {{$demoColors['thirdFontColorClass'] or '' }}">{{ $product->name }}</span>
                </div>
             <!--    <div class="card-content">
           </div> -->
               <div class="card-action ">
                <a class="{{$demoColors['secondFontColorClass'] or '' }}" href="#">{{trans('core::main.section3DetailMessage')}}</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>      
    </section>
  @endif

  <!-- Section 4 section -->
  <section class="section center  {{$demoColors['mainColorClass'] or '' }} {{$demoColors['mainFontColorClass'] or '' }}  ">
    <h2 class="{{$demoColors['sectionTitleFontColor'] or '' }}">{{trans('core::main.section4Message1')}}</h2>
    <a class="waves-effect waves-light {{$demoColors['secondColorClass'] or '' }} {{$demoColors['buttonColorText'] or '' }}  btn-large" href="contact"><i class="fa fa-envelope-o"></i> {{trans('core::main.section4ButtonMessage')}}</a>
  </section>

  <!-- Section 5 - Our clients section -->
  @if(!is_null($clients) and count($clients) > 0)
  <section class="section">
    <h2 class="center {{$demoColors['mainFontColorClass'] or '' }}">{{trans('core::main.section5Message1')}}</h2>
    <div class="container">
      <div class="owl-carousel" id="owl-clients">
          @foreach ($clients as $client)
            <div class="item"> 
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{URL::asset($client->mainPictureURL)}}">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">{{$client->name}}<i class="material-icons right">more_vert</i></span>
                      
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">{{$client->name}}<i class="material-icons right">close</i></span>
                      <p>{{$client->description}}</p>
                    </div>
                  </div>
            </div>
          @endforeach
      </div>
    </div>
  </section>
  @endif

  <div class="divider"></div>

  <!-- Section 6 - Social media -->
  <section class="section">
      <h2 class="center {{$demoColors['mainFontColorClass'] or '' }}">{{trans('core::main.section6Message1')}}</h2>
      <div class="container">
        <div class="flex-row {{$demoColors['thirdFontColorClass'] or '' }} ">
            @if(isset($companyInfo->mainFacebookProfile))
            <div class="flex-col center"><a  target="_blank" href="{{$companyInfo->mainFacebookProfile}}"><i class="fa fa-facebook-square fa-5x"></i> Facebook</a></i></div>
            @endif
            @if(isset($companyInfo->mainTwitterProfile))
            <div class="flex-col center"><a  target="_blank" href="{{$companyInfo->mainTwitterProfile}}"><i class="fa fa-twitter-square fa-5x"></i> Twitter</a></div>
            @endif
            @if(isset($companyInfo->mainInstagramProfile))
            <div class="flex-col center"><a  target="_blank" href="{{$companyInfo->mainInstagramProfile}}"><i class="fa fa-instagram fa-5x"></i> Instagram</a></div>
            @endif
            @if(isset($companyInfo->mainGooglePlusProfile))
            <div class="flex-col center"><a  target="_blank" href="{{$companyInfo->mainGooglePlusProfile}}"><i class="fa fa-google-plus-official fa-5x"></i> Google +</a></div>
            @endif
            @if(isset($companyInfo->mainLinkedInProfile))
            <div class="flex-col center"><a  target="_blank" href="{{$companyInfo->mainLinkedInProfile}}"><i class="fa fa-linkedin-square fa-5x"></i> LinkedIn</a></div>
            @endif
        </div>
      </div>
  </section>
@stop

@section('scripts')
    <link rel="stylesheet" href="{{URL::asset('assets/js/owlCarousel/owl.carousel.css')}}">
    <script src="{{URL::asset('assets/js/owlCarousel/owl.carousel.min.js')}}"></script>

    <script>
      var homeAPI = (function($){
        var initClientsCarousel = function(){
          $("#owl-clients").owlCarousel({
                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [979,3]

          });
        }

        var init = function(){
          initClientsCarousel();
        }

        return {
          init: init
        }

      }(jQuery));

      $(document).ready(function() {
        homeAPI.init();
      });
    </script>

@stop
