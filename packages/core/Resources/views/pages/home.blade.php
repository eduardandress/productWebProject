@extends('core::layouts.default')
@section('content')

    <section class="section grey darken-3 white-text center">
          <h2>¡Ya tienes un buen comienzo!</h2>
          <p>Extiende facilmente tu sitio web, anexandole busquedas de tus productos, carrito de compra, formularios de contacto, etc. ¡Gracias a una buena estructura inicial!</p>
           <a class="waves-effect waves-light blue btn-large"><i class="fa fa-thumbs-up"></i> ¡Da el siguiente paso!</a>
    </section>
    <section class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Las mejores herramientas</h5>

            <p class="light">Para que un sitio web exitoso, es necesario que sea fácilmente extensible y personalizable. Esto involucra tener una buena estructura que permita hacer cambios rápidamente.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Extiende Rápidamente</h5>

            <p class="light">Gracias a las tecnologías usadas en tu sitio como el framework Laravel, no requerirás de personal con mucha experiencia en desarrollo web, si eres el dueño del negocio; o podrás desarrollar rapidamente y de manera organizada, si eres Desarrollador.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Facilmente Personalizable</h5>

            <p class="light">Las tendencias de diseño ahora están a tu mano gracias al Framework de diseño MaterializeCss, por lo que podrás tener un sitio con un diseño pulcro y a la moda. Puedes buscar un diseñador para personalizar el diseño fácilmente.</p>
          </div>
        </div>

       
      </div>

    </section>
    <section class="section center">
        <h2>Nuestros Productos más destacados</h2>
        <div class="container">
            <div class="col m6"></div>
            <div class="col m6"></div>
            <div class="col m6"></div>
            <div class="col m6"></div>
            <div class="col m6"></div>
        </div>      
    </section>
    <section class="section center white-text grey darken-3">
          <h2>Te ofrecemos un servicio de calidad</h2>
          <div class="row">
          
            <div class="col m4">
               <p class="light">
                 Somos profesionales con experiencia dedicados al desarrollo y diseño web.
               </p> 
            </div>
            <div class="col m4">
               <p class="light">  Podemos anexar más funcionalidades para tí.</p> 
            </div>
            <div class="col m4">
                  
            </div>

          </div>
          <a class="waves-effect waves-light blue btn-large"><i class="fa fa-envelope-o"></i> ¡Contáctanos!</a>
    </section>
    <section class="section">
      <h2 class="center light-blue-text">Nuestros Clientes</h2>
      <div class="container">
          <div class="owl-carousel" id="owl-clients">
                  
          
          <div class="item"> <div class="card">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div></div>
          <div class="item"> 
            <div class="card">
              <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
          </div>
          <div class="item"> 
            <div class="card">
              <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
          </div>
          <div class="item"> 
            <div class="card">
              <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
          </div>
          <div class="item"> 
            <div class="card">
              <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
          </div>
          <div class="item"> 
            <div class="card">
              <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
          </div>
         
        </div>
        
      </div>
    </section>

    <section class="section">
        <h2 class="center light-blue-text">Redes Sociales</h2>
        <div class="container">
          <div class="flex-row">

            @if(isset($companyInfo->mainFacebookProfile))
             

               <div class="flex-col center"><a class="blue-text" target="_blank" href="{{$companyInfo->mainFacebookProfile}}"><i class="fa fa-facebook-square fa-5x"></i> Facebook</a></i></div>

            @endif
            @if(isset($companyInfo->mainTwitterProfile))
              <div class="flex-col center"><a class="blue-text" target="_blank" href="{{$companyInfo->mainTwitterProfile}}"><i class="fa fa-twitter-square fa-5x"></i> Twitter</a></div>
            @endif
            @if(isset($companyInfo->mainInstagramProfile))
              <div class="flex-col center"><a class="blue-text" target="_blank" href="{{$companyInfo->mainInstagramProfile}}"><i class="fa fa-instagram fa-5x"></i> Instagram</a></div>
            @endif
            @if(isset($companyInfo->mainGooglePlusProfile))
              <div class="flex-col center"><a class="blue-text" target="_blank" href="{{$companyInfo->mainGooglePlusProfile}}"><i class="fa fa-google-plus-official fa-5x"></i> Google +</a></div>
            @endif
            @if(isset($companyInfo->mainLinkedInProfile))
              <div class="flex-col center"><a class="blue-text" target="_blank" href="{{$companyInfo->mainLinkedInProfile}}"><i class="fa fa-linkedin-square fa-5x"></i> LinkedIn</a></div>
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