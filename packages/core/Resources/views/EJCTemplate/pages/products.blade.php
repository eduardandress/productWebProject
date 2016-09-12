@extends('core::EJCTemplate.layouts.no-banner')

@section('sidebar-content')
    @include('core::EJCTemplate.includes.productmenu')
@stop  

@section('content')


   <!--=====================================
   =              Section 1                =
   ======================================-->

    <div class="section">
        <h4 class="center-align">{{trans('core::main.products')}}</h4>
        <p class="center-align">{{trans('core::main.ourProducts')}}</p>
       
        <div class="container-fluid">
            <div class="flex-row">
                 @foreach ($allProducts as $product)
                    <div  class="flex-item product-item">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator responsive-img"  src="{{URL::asset($product->mainPictureURL)}}">
                          </div>
                          <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4 truncate">{{$product->name}}<i class="material-icons right">more_vert</i>
                            </span>

                            <div class="left-align">
                                @if ($product->price > 0) 
                                    <h5>{{$product->price}} {{$product->currencyAbbr}}</h5>
                                @endif  
                                <span class="stars">
                                      <select  name="rating" class="rating">
                                              <option   @if ($product->rank == 1)  selected="selected"  @endif value="1" >1</option>
                                              <option   @if ($product->rank == 2)  selected="selected"  @endif value="2">2</option>
                                              <option   @if ($product->rank == 3)  selected="selected"  @endif value="3">3</option>
                                              <option   @if ($product->rank == 4)  selected="selected"  @endif value="4">4</option>
                                              <option   @if ($product->rank == 5)  selected="selected"  @endif value="5">5</option>
                                      </select>
                                </span>
                            </div>
                            <p class="right-align"><a href="#">{{trans('core::main.linkSeeProductText')}} </a></p>
                          </div>
                          <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{$product->name}}<i class="material-icons right">close</i></span>
                            <p>{!!html_entity_decode($product->description)!!}</p>
                          </div>
                        </div>
                    </div>
                  @endforeach

            </div>
        </div>
        
    </div>
   

          
    <!--====  End of Section 1  ====-->
  
@stop
@section('scripts')
  <script src="{{URL::asset('assets/jqueryBarRating/jquery.barrating.min.js')}}"></script>
  
  <script type="text/javascript">
    (function($){
      $(function(){

          let products  = {!! json_encode($allProducts) !!}

          $('.product-item .rating').barrating({
              theme: 'css-stars',
              showSelectedRating: false,
              readonly: true
          });

      }); 
    })(jQuery); 
  </script>
@stop
