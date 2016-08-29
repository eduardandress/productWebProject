@extends('core::layouts.no-banner')

@section('sidebar-content')
    @include('core::includes.productmenu')
@stop  

@section('content')


   <!--=====================================
   =              Section 1                =
   ======================================-->

    <div class="section">
        <h4 class="center-align">Productos</h4>
        <p class="center-align">Nuestros productos</p>
       
        <div class="container-fluid">
            <div class="flex-row">
                 @foreach ($allProducts as $product)
                    <div class="flex-item product-item">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator responsive-img"  src="{{URL::asset($product->mainPictureURL)}}">
                          </div>
                          <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{$product->name}}<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">VER DETALLE</a></p>
                          </div>
                          <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{$product->name}}<i class="material-icons right">close</i></span>
                            <p>{{$product->description}}</p>
                          </div>
                        </div>
                    </div>
                  @endforeach

            </div>
        </div>
        
    </div>
    <!--====  End of Section 1  ====-->
  
 
    
@stop